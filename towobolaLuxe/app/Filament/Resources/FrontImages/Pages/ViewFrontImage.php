<?php

namespace App\Filament\Resources\FrontImages\Pages;

use App\Filament\Resources\FrontImages\FrontImageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFrontImage extends ViewRecord
{
    protected static string $resource = FrontImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
