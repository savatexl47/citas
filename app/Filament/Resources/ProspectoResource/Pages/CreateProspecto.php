<?php

namespace App\Filament\Resources\ProspectoResource\Pages;

use App\Filament\Resources\ProspectoResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class CreateProspecto extends CreateRecord
{
    
    use CreateRecord\Concerns\HasWizard;

    protected function getTitle(): string
    {
        return 'Crear Prospecto';
    }
    
    protected static string $resource = ProspectoResource::class;

    protected function getSteps(): array
    {
        return [
            
            Step::make('Contacto')
                ->description('Información de Contacto')
                ->schema([
                    TextInput::make('tel_casa_1'),
                    TextInput::make('tel_casa_2'),
                    TextInput::make('movil')->integer()->length(9),
                    TextInput::make('direccion'),
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
                    TextInput::make('ruc')->length(11),
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
            Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                    TextInput::make('nombre')
                        ->required(),
                    TextInput::make('apellido')
                        ->required(),
                    TextInput::make('email')->email(),
                    TextInput::make('documento'),
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
                    TextInput::make('nacionalidad'),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y')
                    ->afterStateUpdated(function($set, $state) {
                        $set('date_diff', now()->diffInYears(Carbon::parse($state)));
                    })
                    ->reactive(),

                    TextInput::make('date_diff')->label(label:'Edad')->suffix('Automatico al ingresar Fecha de Nacimiento'),
                    
                ]),
        ];
    }
}
