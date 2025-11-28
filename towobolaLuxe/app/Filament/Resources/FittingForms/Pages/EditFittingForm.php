<?php

namespace App\Filament\Resources\FittingForms\Pages;

use App\Filament\Resources\FittingForms\FittingFormResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFittingForm extends EditRecord
{
    protected static string $resource = FittingFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
