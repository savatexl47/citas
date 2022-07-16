<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsistenciaResource\Pages;
use App\Filament\Resources\AsistenciaResource\RelationManagers;
use App\Models\Asistencia;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class AsistenciaResource extends Resource
{
    protected static ?string $model = Asistencia::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('fecha')->format('Y-m-d')->displayFormat('d/m/Y')->default(now())
                ->required(),
                BelongsToSelect::make('asociados_id')->relationship('asociados', 'nombre'),
                Forms\Components\TextInput::make('ingreso')->required(),
                Forms\Components\TextInput::make('salida')->required(),
                BelongsToSelect::make('disciplinas_id')->relationship('disciplinas', 'nombre'),
                Select::make('estado')
                    ->options([
                        'activo' => 'Activo',
                        'congelado' => 'Congelado',
                        'inactivo' => 'Inactivo',
                    ])
                    ->default('activo')
                    ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('llaves')->required(),
                Select::make('devolvio_llave')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])  
                    ->default('si')
                    ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('toalla')->required(),
                Select::make('devolvio_toalla')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])
                    ->default('si')
                    ->disablePlaceholderSelection(),
                BelongsToSelect::make('planes_id')->relationship('planes', 'nombre'),
                DatePicker::make('fecha_rev')->format('Y-m-d')->displayFormat('d/m/Y')
                ->label(label:'Fecha Vencimiento'),
                Forms\Components\TextInput::make('deuda')->required(),
       
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha'),
                Tables\Columns\TextColumn::make('asociados.nombre'),
                Tables\Columns\TextColumn::make('ingreso'),
                Tables\Columns\TextColumn::make('salida'),
                Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('llaves'),
                Tables\Columns\TextColumn::make('devolvio_llave'),
                Tables\Columns\TextColumn::make('toalla'),
                Tables\Columns\TextColumn::make('devolvio_toalla'),
                Tables\Columns\TextColumn::make('disciplina'),
                Tables\Columns\TextColumn::make('planes.nombre'),
                Tables\Columns\TextColumn::make('fecha_rev')->label(label:'Fecha Vencimiento'),
                Tables\Columns\TextColumn::make('deuda'),
                
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
            'index' => Pages\ListAsistencias::route('/'),
            'create' => Pages\CreateAsistencia::route('/create'),
            'edit' => Pages\EditAsistencia::route('/{record}/edit'),
        ];
    }
}
