<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DistritoResource\Pages;
use App\Filament\Resources\DistritoResource\RelationManagers;
use App\Models\Distrito;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class DistritoResource extends Resource
{
    protected static ?string $model = Distrito::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-location-marker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre'),
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListDistritos::route('/'),
            'create' => Pages\CreateDistrito::route('/create'),
            'edit' => Pages\EditDistrito::route('/{record}/edit'),
        ];
    }
}
