<?php

namespace App\Filament\Resources\FittingForms\Pages;

use App\Filament\Resources\FittingForms\FittingFormResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFittingForm extends ViewRecord
{
    protected static string $resource = FittingFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
