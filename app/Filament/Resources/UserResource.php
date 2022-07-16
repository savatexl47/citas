<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Usuarios';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                    TextInput::make('nombre')
                        ->required(),
                    TextInput::make('apellido')
                        ->required(),
                    TextInput::make('email')->email()
                        ->required(),
                    TextInput::make('password')
                        ->required(),
                    
                    TextInput::make('direccion')->required(),
                    BelongsToSelect::make('distritos_id')->relationship('distritos', 'nombre'),
                    TextInput::make('dni')->integer()->length(8)->required(),
                    Select::make('estado_civil')
                    ->options([
                        'casado' => 'Casado',
                        'soltero' => 'Soltero',
                        'viudo' => 'Viudo',
                    ]),
                    Select::make('sexo')
                    ->options([
                        'femenino' => 'Femenino',
                        'masculino' => 'Masculino',
                        
                    ]),
                    TextInput::make('movil')->integer()->length(9)->required(),
                    TextInput::make('tel_casa_1')->integer()->length(7),
                    TextInput::make('edad')->required(),
                    TextInput::make('tel_casa_2')->integer()->length(7),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    ]),
            Step::make('Detalles')
                ->description('Detalles')
                ->schema([
                    BelongsToSelect::make('cargos_id')->relationship('cargos', 'nombre')->required(),
                    BelongsToSelect::make('areas_id')->relationship('areas', 'nombre')->required(),
                    //BelongsToSelect::make('categorias_id')->relationship('categorias', 'nombre')->required(),
                    TextInput::make('acuerdo'),
                    TextInput::make('reglamento'),
                    DatePicker::make('fecha_ingreso')->format('Y-m-d')->displayFormat('d/m/Y')
                    ->default(now())->required(),
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y'),
                ]),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('email'),
                //Tables\Columns\TextColumn::make('password'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('apellido'),
                //Tables\Columns\TextColumn::make('direccion'),
                //Tables\Columns\TextColumn::make('distritos.nombre'),
                //Tables\Columns\TextColumn::make('dni'),
                //Tables\Columns\TextColumn::make('estado_civil'),
                //Tables\Columns\TextColumn::make('sexo'),
                Tables\Columns\TextColumn::make('movil'),
                //Tables\Columns\TextColumn::make('tel_casa_1'),
                Tables\Columns\TextColumn::make('edad'),
                //Tables\Columns\TextColumn::make('tel_casa_2'),
                //Tables\Columns\TextColumn::make('fecha_nacimiento'),
                //Tables\Columns\TextColumn::make('cargos.nombre'),
                //Tables\Columns\TextColumn::make('areas.nombre'),
                //Tables\Columns\TextColumn::make('categorias.nombre'),
                //Tables\Columns\TextColumn::make('acuerdo'),
                //Tables\Columns\TextColumn::make('reglamento'),
                Tables\Columns\TextColumn::make('fecha_ingreso'),
                Tables\Columns\TextColumn::make('fecha_cese'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
