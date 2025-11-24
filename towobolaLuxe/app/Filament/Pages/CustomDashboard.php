<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardStats;
use Filament\Pages\Page;
use BackedEnum;

class CustomDashboard extends Page
{
    protected string $view = 'filament.pages.custom-dashboard';
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-home';
    protected static ?string $title = "Dashboard";
    protected static ?string $slug = "dashboard";




    protected function getFooterWidgets(): array
    {
        return [
            DashboardStats::class
        ];
    }
}
