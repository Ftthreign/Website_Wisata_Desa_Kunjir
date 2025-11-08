let scale = 1;
let translateX = 0;
let translateY = 0;
let isDragging = false;
let startX = 0;
let startY = 0;

function openImageModal() {
    const modal = document.getElementById("imageModal");
    if (!modal) return;

    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.style.overflow = "hidden";
    resetZoom();

    // Animate in
    setTimeout(() => {
        modal.style.opacity = "1";
    }, 10);
}

function closeImageModal() {
    const modal = document.getElementById("imageModal");
    if (!modal) return;

    modal.style.opacity = "0";

    setTimeout(() => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        document.body.style.overflow = "auto";
    }, 300);
}

function zoomIn() {
    scale = Math.min(scale + 0.3, 4);
    updateTransform();
}

function zoomOut() {
    scale = Math.max(scale - 0.3, 0.5);
    updateTransform();
}

function resetZoom() {
    scale = 1;
    translateX = 0;
    translateY = 0;
    updateTransform();
}

function updateTransform() {
    const img = document.getElementById("zoomedImage");
    if (!img) return;
    img.style.transform = `scale(${scale}) translate(${translateX}px, ${translateY}px)`;
}

function getDistance(touch1, touch2) {
    const dx = touch1.clientX - touch2.clientX;
    const dy = touch1.clientY - touch2.clientY;
    return Math.sqrt(dx * dx + dy * dy);
}

// Expose functions to global scope for inline onclick handlers
window.openImageModal = openImageModal;
window.closeImageModal = closeImageModal;
window.zoomIn = zoomIn;
window.zoomOut = zoomOut;
window.resetZoom = resetZoom;

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
    const imageContainer = document.getElementById("imageContainer");
    const zoomedImage = document.getElementById("zoomedImage");

    // Mouse wheel zoom
    imageContainer?.addEventListener("wheel", (e) => {
        e.preventDefault();
        if (e.deltaY < 0) {
            zoomIn();
        } else {
            zoomOut();
        }
    });

    // Drag to pan
    imageContainer?.addEventListener("mousedown", (e) => {
        if (scale > 1) {
            isDragging = true;
            startX = e.clientX - translateX;
            startY = e.clientY - translateY;
            imageContainer.style.cursor = "grabbing";
        }
    });

    document.addEventListener("mousemove", (e) => {
        if (isDragging) {
            translateX = e.clientX - startX;
            translateY = e.clientY - startY;
            updateTransform();
        }
    });

    document.addEventListener("mouseup", () => {
        isDragging = false;
        if (imageContainer) {
            imageContainer.style.cursor = "move";
        }
    });

    // Touch support for mobile
    let initialDistance = 0;
    let initialScale = 1;

    imageContainer?.addEventListener("touchstart", (e) => {
        if (e.touches.length === 2) {
            initialDistance = getDistance(e.touches[0], e.touches[1]);
            initialScale = scale;
        } else if (e.touches.length === 1) {
            isDragging = true;
            startX = e.touches[0].clientX - translateX;
            startY = e.touches[0].clientY - translateY;
        }
    });

    imageContainer?.addEventListener("touchmove", (e) => {
        e.preventDefault();

        if (e.touches.length === 2) {
            const currentDistance = getDistance(e.touches[0], e.touches[1]);
            scale = Math.max(
                0.5,
                Math.min(4, initialScale * (currentDistance / initialDistance))
            );
            updateTransform();
        } else if (isDragging && e.touches.length === 1) {
            translateX = e.touches[0].clientX - startX;
            translateY = e.touches[0].clientY - startY;
            updateTransform();
        }
    });

    imageContainer?.addEventListener("touchend", () => {
        isDragging = false;
    });

    // Close on ESC key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeImageModal();
        }
    });

    // Close on background click
    document.getElementById("imageModal")?.addEventListener("click", (e) => {
        if (e.target.id === "imageModal") {
            closeImageModal();
        }
    });
});
