<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisciplinaResource\Pages;
use App\Filament\Resources\DisciplinaResource\RelationManagers;
use App\Models\Disciplina;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class DisciplinaResource extends Resource
{
    protected static ?string $model = Disciplina::class;

    protected static ?string $navigationGroup = 'Catalogos';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

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
            'index' => Pages\ListDisciplinas::route('/'),
            'create' => Pages\CreateDisciplina::route('/create'),
            'edit' => Pages\EditDisciplina::route('/{record}/edit'),
        ];
    }
}
