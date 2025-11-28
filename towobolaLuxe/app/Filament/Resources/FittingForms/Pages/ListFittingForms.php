<?php

namespace App\Filament\Resources\FittingForms\Pages;

use App\Filament\Resources\FittingForms\FittingFormResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFittingForms extends ListRecords
{
    protected static string $resource = FittingFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
