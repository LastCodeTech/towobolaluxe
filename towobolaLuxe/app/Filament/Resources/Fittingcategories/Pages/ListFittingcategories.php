<?php

namespace App\Filament\Resources\Fittingcategories\Pages;

use App\Filament\Resources\Fittingcategories\FittingcategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFittingcategories extends ListRecords
{
    protected static string $resource = FittingcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
