<?php

namespace App\Filament\Resources\Lookbooks\Pages;

use App\Filament\Resources\Lookbooks\LookbookResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLookbook extends ViewRecord
{
    protected static string $resource = LookbookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
