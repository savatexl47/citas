<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaneResource\Pages;
use App\Filament\Resources\PlaneResource\RelationManagers;
use App\Models\Plane;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class PlaneResource extends Resource
{
    protected static ?string $model = Plane::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                TextInput::make('monto')->mask(fn (TextInput\Mask $mask) => $mask->money('S/', ',', 2))->required(),
                Select::make('estado')
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                ]),
                Forms\Components\TextInput::make('sesiones')->required(),
                Forms\Components\TextInput::make('dias')->required(),
                Forms\Components\TextInput::make('hora_inicio')->required(),
                Forms\Components\TextInput::make('d1'),
                Forms\Components\TextInput::make('hora_fin')->required(),
                Forms\Components\TextInput::make('d2'),
                Forms\Components\TextInput::make('d3'),
                Forms\Components\TextInput::make('d4'),
                Forms\Components\TextInput::make('d5'),
                Forms\Components\TextInput::make('d6'),
                Forms\Components\TextInput::make('d7'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('monto'),
                Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('sesiones'),
                Tables\Columns\TextColumn::make('dias'),
                Tables\Columns\TextColumn::make('hora_inicio'),
                Tables\Columns\TextColumn::make('hora_fin'),
                Tables\Columns\TextColumn::make('d1'),
                Tables\Columns\TextColumn::make('d2'),
                Tables\Columns\TextColumn::make('d3'),
                Tables\Columns\TextColumn::make('d4'),
                Tables\Columns\TextColumn::make('d5'),
                Tables\Columns\TextColumn::make('d6'),
                Tables\Columns\TextColumn::make('d7'),
                
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
            'index' => Pages\ListPlanes::route('/'),
            'create' => Pages\CreatePlane::route('/create'),
            'edit' => Pages\EditPlane::route('/{record}/edit'),
        ];
    }
}
