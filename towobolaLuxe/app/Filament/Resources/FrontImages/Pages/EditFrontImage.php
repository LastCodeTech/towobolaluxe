<?php

namespace App\Filament\Resources\FrontImages\Pages;

use App\Filament\Resources\FrontImages\FrontImageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFrontImage extends EditRecord
{
    protected static string $resource = FrontImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
