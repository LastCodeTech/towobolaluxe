<?php

namespace App\Filament\Resources\Fittingcategories;

use App\Filament\Resources\Fittingcategories\Pages\CreateFittingcategory;
use App\Filament\Resources\Fittingcategories\Pages\EditFittingcategory;
use App\Filament\Resources\Fittingcategories\Pages\ListFittingcategories;
use App\Filament\Resources\Fittingcategories\Pages\ViewFittingcategory;
use App\Filament\Resources\Fittingcategories\Schemas\FittingcategoryForm;
use App\Filament\Resources\Fittingcategories\Schemas\FittingcategoryInfolist;
use App\Filament\Resources\Fittingcategories\Tables\FittingcategoriesTable;
use App\Models\Fittingcategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FittingcategoryResource extends Resource
{
    protected static ?string $model = Fittingcategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FittingcategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FittingcategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FittingcategoriesTable::configure($table);
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
            'index' => ListFittingcategories::route('/'),
            'create' => CreateFittingcategory::route('/create'),
            'view' => ViewFittingcategory::route('/{record}'),
            'edit' => EditFittingcategory::route('/{record}/edit'),
        ];
    }
}
