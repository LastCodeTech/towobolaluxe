<?php

namespace App\Filament\Resources\FrontImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class FrontImageForm
{
    public static function getCreateAuthorizationResponse()
    {
        return false;
    }
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->required(),
                Hidden::make('user_id')
                    ->default(Auth::id())

            ])->columns(1);
    }
}
