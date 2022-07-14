<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesioneResource\Pages;
use App\Filament\Resources\ProfesioneResource\RelationManagers;
use App\Models\Profesione;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProfesioneResource extends Resource
{
    protected static ?string $model = Profesione::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

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
            'index' => Pages\ListProfesiones::route('/'),
            'create' => Pages\CreateProfesione::route('/create'),
            'edit' => Pages\EditProfesione::route('/{record}/edit'),
        ];
    }
}
