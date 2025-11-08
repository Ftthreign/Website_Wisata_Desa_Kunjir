<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class AccountWidget extends Widget
{
    protected static string $view = 'filament.widgets.account-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = -3;

    public function getUser()
    {
        return Auth::user();
    }

    public function getGreeting(): string
    {
        $hour = now()->format('H');

        if ($hour < 12) {
            return 'Selamat Pagi';
        } elseif ($hour < 15) {
            return 'Selamat Siang';
        } elseif ($hour < 18) {
            return 'Selamat Sore';
        } else {
            return 'Selamat Malam';
        }
    }

    public function getAccountAge(): string
    {
        $user = $this->getUser();

        $days = (int) round($user->created_at->diffInDays(now()));

        if ($days < 30) {
            return $days . ' hari';
        } elseif ($days < 365) {
            return floor($days / 30) . ' bulan';
        } else {
            return floor($days / 365) . ' tahun';
        }
    }
}
