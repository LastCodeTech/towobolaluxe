<?php

namespace App\Filament\Widgets;

use App\Models\Lookbook;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $lookbook_total = Lookbook::count();
        $total_users = User::count();
        $total_testimonials=Testimonial::count();
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
            Stat::make("Testimonials", $total_testimonials)
                ->color('primary')
                ->description('Testimonials from our customers')
                ->icon('heroicon-m-chat-bubble-bottom-center')
            ,
        ];
    }
}
