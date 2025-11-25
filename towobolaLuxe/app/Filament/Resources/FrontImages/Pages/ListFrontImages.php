<?php

namespace App\Filament\Resources\FrontImages\Pages;

use App\Filament\Resources\FrontImages\FrontImageResource;
use App\Models\FrontImage;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFrontImages extends ListRecords
{
    protected static string $resource = FrontImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->visible(function(){
                $allowedImages = 7;
                $totalCreated = FrontImage::count();

                if($totalCreated >= $allowedImages){
                    return false;
                }else{
                    return true;
                }


            }),
        ];
    }
}
