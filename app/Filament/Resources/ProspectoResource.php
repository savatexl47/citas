<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProspectoResource\Pages;
use App\Filament\Resources\ProspectoResource\RelationManagers;
use App\Models\Prospecto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProspectoResource extends Resource
{
    protected static ?string $model = Prospecto::class;

    protected static ?string $navigationIcon = 'heroicon-o-duplicate';

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
                    TextInput::make('documento')->required(),
                    Select::make('estado_civil')
                    ->options([
                        'casado' => 'Casado',
                        'divorciado' => 'Divorciado',
                        'soltero' => 'Soltero',
                        'viudo' => 'Viudo',
                    ])  
                    ->default('soltero')
                    ->disablePlaceholderSelection(),
                    Select::make('sexo')
                    ->options([
                        'femenino' => 'Femenino',
                        'masculino' => 'Masculino',
                    ])  
                    ->default('femenino')
                    ->disablePlaceholderSelection(),
                    TextInput::make('edad'),
                    TextInput::make('nacionalidad')->required(),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y')
                    ->required(),
                    
                ]),
            Step::make('Contacto')
                ->description('Información de Contacto')
                ->schema([
                    TextInput::make('tel_casa_1'),
                    TextInput::make('tel_casa_2'),
                    TextInput::make('movil')->integer()->length(9)->required(),
                    TextInput::make('direccion')->required(),
                    BelongsToSelect::make('distritos_id')->relationship('distritos', 'nombre'),
                                        
                ]),
            Step::make('Detalles')
                ->description('Detalles')
                ->schema([
                     Select::make('red_social_favorita')
                    ->options([
                        'facebook' => 'Facebook',
                        'instagram' => 'Instagram',
                        'linkedin' => 'LinkedIn',
                        'twitter' => 'Twitter',
                        'whatsapp' => 'Whatsapp',
                        'youtube' => 'Youtube',
                    ])  
                    ->default('facebook')
                    ->disablePlaceholderSelection(),
                    Select::make('hijos')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])  
                    ->default('si')
                    ->disablePlaceholderSelection(),
                    TextInput::make('ruc')->length(11)->required(),
                    Textarea::make('preferencia_en_promociones')->rows(2),
                    BelongsToSelect::make('profesiones_id')->relationship('profesiones', 'nombre'),
                    BelongsToSelect::make('cargos_id')->relationship('cargos', 'nombre'),
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y')
                    ->default(now())->label(label: 'Fecha Registro'),
                    DatePicker::make('fecha_vencimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    TextInput::make('invitado'),
                    TextInput::make('dias_invitado'),
                    TextInput::make('asistencia_invitado'),
                    TextInput::make('nota'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('apellido'),
                Tables\Columns\TextColumn::make('edad'),
                //Tables\Columns\TextColumn::make('direccion'),
                //Tables\Columns\TextColumn::make('distrito'),
                //Tables\Columns\TextColumn::make('documento'),
                //Tables\Columns\TextColumn::make('estado_civil'),
                //Tables\Columns\TextColumn::make('red_social_favorita'),
                //Tables\Columns\TextColumn::make('sexo'),
                //Tables\Columns\TextColumn::make('hijos'),
                //Tables\Columns\TextColumn::make('nacionalidad'),
                //Tables\Columns\TextColumn::make('email'),
                //Tables\Columns\TextColumn::make('ruc'),
                //Tables\Columns\TextColumn::make('tel_casa_1'),
                //Tables\Columns\TextColumn::make('tel_casa_2'),
                Tables\Columns\TextColumn::make('movil'),
                //Tables\Columns\TextColumn::make('fecha_nacimiento'),
                //Tables\Columns\TextColumn::make('preferencia_en_promociones'),
                Tables\Columns\TextColumn::make('fecha_vencimiento'),
                Tables\Columns\TextColumn::make('invitado'),
                Tables\Columns\TextColumn::make('dias_invitado'),
                //Tables\Columns\TextColumn::make('asistencia_invitado'),
                //Tables\Columns\TextColumn::make('nota'),
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
            'index' => Pages\ListProspectos::route('/'),
            'create' => Pages\CreateProspecto::route('/create'),
            'edit' => Pages\EditProspecto::route('/{record}/edit'),
        ];
    }
}
