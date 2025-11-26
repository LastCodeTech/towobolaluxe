<?php

namespace App\Filament\Resources\FrontImages;

use App\Filament\Resources\FrontImages\Pages\CreateFrontImage;
use App\Filament\Resources\FrontImages\Pages\EditFrontImage;
use App\Filament\Resources\FrontImages\Pages\ListFrontImages;
use App\Filament\Resources\FrontImages\Pages\ViewFrontImage;
use App\Filament\Resources\FrontImages\Schemas\FrontImageForm;
use App\Filament\Resources\FrontImages\Schemas\FrontImageInfolist;
use App\Filament\Resources\FrontImages\Tables\FrontImagesTable;
use App\Models\FrontImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FrontImageResource extends Resource
{
    protected static ?string $model = FrontImage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    
    protected static string|UnitEnum|null $navigationGroup = "Front End";
    public static function form(Schema $schema): Schema
    {
        return FrontImageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FrontImageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FrontImagesTable::configure($table);
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
            'index' => ListFrontImages::route('/'),
            'create' => CreateFrontImage::route('/create'),
            'view' => ViewFrontImage::route('/{record}'),
            'edit' => EditFrontImage::route('/{record}/edit'),
        ];
    }
}
