<?php

namespace App\Filament\Resources\AsociadoResource\Pages;

use App\Filament\Resources\AsociadoResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class CreateAsociado extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = AsociadoResource::class;

    protected function getSteps(): array
    {
        return [
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
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y'),
                    
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
                    DatePicker::make('fecha_vencimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    
                ]),
        ];
    }
}
