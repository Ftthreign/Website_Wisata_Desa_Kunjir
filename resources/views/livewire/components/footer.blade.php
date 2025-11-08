    <footer class="bg-gray-900 text-gray-300 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

            <!-- Brand -->
            <div>
                <h3 class="text-emerald-400 text-lg font-semibold mb-3">Desa Wisata Kunjir</h3>
                <p class="text-sm leading-relaxed mb-4">
                    Destinasi pesisir selatan Lampung dengan pesona alam, kuliner, dan budaya khas yang memikat.
                    Temukan pengalaman wisata yang autentik di Desa Kunjir.
                </p>
                <a href="#plan"
                    class="inline-block mt-2 px-4 py-2 bg-emerald-500 text-white rounded-lg text-sm hover:bg-emerald-600 transition">
                    Rencanakan Perjalanan
                </a>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-3">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href{{ url('/#explore') }} class="hover:text-emerald-400 transition">Eksplorasi</a></li>
                    <li><a href={{ url('/#plan') }} class="hover:text-emerald-400 transition">Rencana Perjalanan</a>
                    </li>
                    <li><a href={{ url('/#articles') }} class="hover:text-emerald-400 transition">Artikel & Berita</a>
                    </li>
                    <li><a href={{ url('/#maps') }} class="hover:text-emerald-400 transition">Peta Lokasi</a></li>
                    <li><a href={{ url('/#faq') }} class="hover:text-emerald-400 transition">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li><span class="text-gray-400">Alamat:</span> Desa Kunjir, Lampung Selatan</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-white font-semibold mb-3">Ikuti Kami</h4>
                <div class="flex space-x-4 text-xl">
                    <a href="https://www.instagram.com/wisata_kunjir/" target="_blank"
                        class="hover:text-emerald-400 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                </p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} <span class="text-white">Desa Wisata Kunjir</span> - Lampung Selatan.
        </div>
    </footer>
