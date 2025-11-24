<?php

namespace App\Filament\Widgets;

use App\Models\Lookbook;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $lookbook_total = Lookbook::count();
        $total_users = User::count();
        return [
            Stat::make("Total Users", $total_users)
                ->color('primary')
                ->description('The total number of our users')
                ->icon('heroicon-m-user-circle')
            ,
            Stat::make("Total Collections", $lookbook_total)
                ->color('primary')
                ->description('The total number of our collections')
                ->icon('heroicon-m-shopping-bag')
            ,
            Stat::make("Testimonials", 20)
                ->color('primary')
                ->description('Testimonials from our customers')
                ->icon('heroicon-m-chat-bubble-bottom-center')
            ,
        ];
    }
}
