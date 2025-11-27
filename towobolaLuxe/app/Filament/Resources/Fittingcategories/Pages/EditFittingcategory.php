<?php

namespace App\Filament\Resources\Fittingcategories\Pages;

use App\Filament\Resources\Fittingcategories\FittingcategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFittingcategory extends EditRecord
{
    protected static string $resource = FittingcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
