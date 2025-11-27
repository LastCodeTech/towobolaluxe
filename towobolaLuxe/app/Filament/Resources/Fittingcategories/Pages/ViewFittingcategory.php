<?php

namespace App\Filament\Resources\Fittingcategories\Pages;

use App\Filament\Resources\Fittingcategories\FittingcategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFittingcategory extends ViewRecord
{
    protected static string $resource = FittingcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
