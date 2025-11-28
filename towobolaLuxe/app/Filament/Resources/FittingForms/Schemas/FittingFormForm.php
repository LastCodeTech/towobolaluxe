<?php

namespace App\Filament\Resources\FittingForms\Schemas;

use App\Models\Fittingcategory;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class FittingFormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        Select::make('fittingcategory_id')
                            ->required()
                            ->columnSpanFull()
                            ->label('Fitting Categories')
                            ->options(Fittingcategory::all()->pluck('name', 'id')),
                        Repeater::make('values')
                            ->schema([
                                Section::make()->schema([
                                    TextInput::make('name'),

                                    Select::make('type')
                                        ->options([
                                            'text' => 'Text',
                                            'number' => 'Number'
                                        ]),
                                    TextInput::make('unit')
                                ])->columns(3)
                            ])
                            ->columnSpanFull(),
                        Hidden::make('user_id')
                            ->default(Auth::id()),
                    ])->columns(1)
            ])->columns(1);
    }
}
