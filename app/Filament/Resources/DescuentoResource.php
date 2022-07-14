<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DescuentoResource\Pages;
use App\Filament\Resources\DescuentoResource\RelationManagers;
use App\Models\Descuento;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;

class DescuentoResource extends Resource
{
    protected static ?string $model = Descuento::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-receipt-tax';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('monto')->required(),
                Forms\Components\TextInput::make('porcentaje')->required(),
                Select::make('estado')
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('monto'),
                Tables\Columns\TextColumn::make('porcentaje'),
                Tables\Columns\TextColumn::make('estado'),
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
            'index' => Pages\ListDescuentos::route('/'),
            'create' => Pages\CreateDescuento::route('/create'),
            'edit' => Pages\EditDescuento::route('/{record}/edit'),
        ];
    }
}
