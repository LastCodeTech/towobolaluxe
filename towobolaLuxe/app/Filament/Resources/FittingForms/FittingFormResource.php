<?php

namespace App\Filament\Resources\FittingForms;

use App\Filament\Resources\FittingForms\Pages\CreateFittingForm;
use App\Filament\Resources\FittingForms\Pages\EditFittingForm;
use App\Filament\Resources\FittingForms\Pages\ListFittingForms;
use App\Filament\Resources\FittingForms\Pages\ViewFittingForm;
use App\Filament\Resources\FittingForms\Schemas\FittingFormForm;
use App\Filament\Resources\FittingForms\Schemas\FittingFormInfolist;
use App\Filament\Resources\FittingForms\Tables\FittingFormsTable;
use App\Models\FittingForm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FittingFormResource extends Resource
{
    protected static ?string $model = FittingForm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FittingFormForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FittingFormInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FittingFormsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFittingForms::route('/'),
            'create' => CreateFittingForm::route('/create'),
            'view' => ViewFittingForm::route('/{record}'),
            'edit' => EditFittingForm::route('/{record}/edit'),
        ];
    }
}
