<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsociadoResource\Pages;
use App\Filament\Resources\AsociadoResource\RelationManagers;
use App\Models\Asociado;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AsociadoResource extends Resource
{
    protected static ?string $model = Asociado::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('apellido')->email()->required(),
                Forms\Components\TextInput::make('edad')->required(),
                Forms\Components\TextInput::make('imagen')->required(),
                Forms\Components\TextInput::make('direccion')->required(),
                Forms\Components\TextInput::make('distrito')->required(),
                Forms\Components\TextInput::make('documento')->required(),
                Forms\Components\TextInput::make('estado_civil')->required(),
                Forms\Components\TextInput::make('red_social_favorita')->required(),
                Forms\Components\TextInput::make('sexo')->required(),
                Forms\Components\TextInput::make('hijos')->required(),
                Forms\Components\TextInput::make('nacionalidad')->required(),
                Forms\Components\TextInput::make('email')->required(),
                Forms\Components\TextInput::make('ruc')->required(),
                Forms\Components\TextInput::make('tel_casa_1'),
                Forms\Components\TextInput::make('tel_casa_2'),
                Forms\Components\TextInput::make('movil'),
                Forms\Components\TextInput::make('fecha_nacimiento')->required(),
                Forms\Components\TextInput::make('preferencia_en_promociones'),
                Forms\Components\TextInput::make('fecha_vencimiento'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('apellido'),
                Tables\Columns\TextColumn::make('edad'),
                Tables\Columns\TextColumn::make('direccion'),
                Tables\Columns\TextColumn::make('distrito'),
                Tables\Columns\TextColumn::make('documento'),
                Tables\Columns\TextColumn::make('estado_civil'),
                Tables\Columns\TextColumn::make('red_social_favorita'),
                Tables\Columns\TextColumn::make('sexo'),
                Tables\Columns\TextColumn::make('hijos'),
                Tables\Columns\TextColumn::make('nacionalidad'),
                Tables\Columns\TextColumn::make('ruc'),
                Tables\Columns\TextColumn::make('tel_casa_1'),
                Tables\Columns\TextColumn::make('tel_casa_2'),
                Tables\Columns\TextColumn::make('movil'),
                Tables\Columns\TextColumn::make('fecha_nacimiento'),
                Tables\Columns\TextColumn::make('preferencia_en_promociones'),
                Tables\Columns\TextColumn::make('fecha_vencimiento'),
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
            'index' => Pages\ListAsociados::route('/'),
            'create' => Pages\CreateAsociado::route('/create'),
            'edit' => Pages\EditAsociado::route('/{record}/edit'),
        ];
    }
}
