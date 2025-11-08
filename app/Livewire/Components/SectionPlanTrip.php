<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SectionPlanTrip extends Component
{
    public $cards = [];
    public $showModal = false;
    public $selectedCard = null;

    public function mount()
    {
        $this->cards = [
            [
                'img' => '/images/kunjir_pantai_1.jpeg',
                't' => 'Snorkeling Terumbu Karang',
                'e' => 'Spot jernih dengan biota beragam; bawa alat atau sewa di warga.',
                'badge' => 'Populer',
                'badgeColor' => 'bg-blue-500',
                'desc' => 'Nikmati pengalaman snorkeling dengan pemandangan terumbu karang alami dan ikan tropis di perairan jernih Desa Kunjir. Cocok untuk pemula hingga penyelam berpengalaman.',
            ],
            [
                'img' => '/images/kunjir_pantai_1.jpeg',
                't' => 'Menikmati Sunrise',
                'e' => 'Pagi di pesisir Kunjir: langit keemasan + siluet Rajabasa.',
                'desc' => 'Saksikan matahari terbit di pesisir selatan Lampung, ditemani semilir angin laut dan pemandangan Gunung Rajabasa di kejauhan.',
            ],
            [
                'img' => '/images/kunjir_pantai_1.jpeg',
                't' => 'Kuliner Pesisir',
                'e' => 'Ikan bakar, sate cumi, sambal tempoyak — favorit wisatawan.',
                'desc' => 'Cicipi aneka kuliner khas pesisir Lampung yang menggugah selera. Semua bahan segar langsung dari laut sekitar Kunjir.',
            ],
            [
                'img' => '/images/kunjir_pantai_1.jpeg',
                't' => 'Jalan Santai Tepi Pantai',
                'e' => 'Track ringan di desa, cocok keluarga & foto-foto.',
                'desc' => 'Rasakan suasana damai dengan berjalan santai di sepanjang pantai sambil menikmati panorama alam dan aktivitas nelayan lokal.',
            ],
        ];
    }

    public function openModal($index)
    {
        $this->selectedCard = $this->cards[$index];
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.section-plan-trip');
    }
}
