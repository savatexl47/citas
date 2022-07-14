<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConceptoResource\Pages;
use App\Filament\Resources\ConceptoResource\RelationManagers;
use App\Models\Concepto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ConceptoResource extends Resource
{
    protected static ?string $model = Concepto::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('tipo')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('tipo'),

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
            'index' => Pages\ListConceptos::route('/'),
            'create' => Pages\CreateConcepto::route('/create'),
            'edit' => Pages\EditConcepto::route('/{record}/edit'),
        ];
    }
}
