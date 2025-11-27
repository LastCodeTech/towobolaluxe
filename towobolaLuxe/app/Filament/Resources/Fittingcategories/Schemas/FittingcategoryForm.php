<?php

namespace App\Filament\Resources\Fittingcategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FittingcategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->unique()
                    ->required(),
            ]);
    }
}
