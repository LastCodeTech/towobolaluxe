<?php

namespace App\Filament\Resources\FrontImages\Pages;

use App\Filament\Resources\FrontImages\FrontImageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFrontImage extends CreateRecord
{
    protected static string $resource = FrontImageResource::class;
    public function canCreateAnother(): bool
    {
        return false;
    }
}



