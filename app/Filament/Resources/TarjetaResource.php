<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarjetaResource\Pages;
use App\Filament\Resources\TarjetaResource\RelationManagers;
use App\Models\Tarjeta;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TarjetaResource extends Resource
{
    protected static ?string $model = Tarjeta::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

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
            'index' => Pages\ListTarjetas::route('/'),
            'create' => Pages\CreateTarjeta::route('/create'),
            'edit' => Pages\EditTarjeta::route('/{record}/edit'),
        ];
    }
}
