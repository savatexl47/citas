<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;

class CreateUser extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected function getTitle(): string
    {
        return 'Crear Usuario';
    }

    protected static string $resource = UserResource::class;

    protected function getSteps(): array
    {
        return [
            
            Step::make('Detalles')
                ->description('Detalles')
                ->schema([
                    BelongsToSelect::make('cargos_id')->relationship('cargos', 'nombre'),
                    BelongsToSelect::make('areas_id')->relationship('areas', 'nombre'),
                    //BelongsToSelect::make('categorias_id')->relationship('categorias', 'nombre')->required(),
                    TextInput::make('acuerdo'),
                    TextInput::make('reglamento'),
                    DatePicker::make('fecha_ingreso')->format('Y-m-d')->displayFormat('d/m/Y')
                    ->default(now())->required(),
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y'),
                ]),
            Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                    TextInput::make('nombre')
                        ->required(),
                    TextInput::make('apellido')
                        ->required(),
                    TextInput::make('email')->email()->required(),
                    TextInput::make('password')
                        ->required(),
                    
                    TextInput::make('direccion'),
                    BelongsToSelect::make('distritos_id')->relationship('distritos', 'nombre'),
                    TextInput::make('dni')->integer()->length(8),
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
                    TextInput::make('movil')->integer()->length(9),
                    TextInput::make('tel_casa_1')->integer()->length(7),
                    TextInput::make('tel_casa_2')->integer()->length(7),
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
