<?php

namespace App\Filament\Resources\Lookbooks\Schemas;

use App\Models\category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;

use Filament\Schemas\Schema;

class LookbookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Collections Info')
                    ->schema([
                        TextInput::make('collection_name')
                            ->required(),
                        Select::make('category_id')
                            ->required()
                            ->label('Category')
                            ->options(category::all()->pluck('name', 'id')),
                            
                        Textarea::make('description')
                            
                            ->default(null)
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->image()
                            ->columnSpan('full')
                            ->disk('public'),
                    ])->columns(2)
            ])->columns(1);
    }
}
