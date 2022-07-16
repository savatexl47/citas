<?php

namespace App\Filament\Resources\PagoResource\Pages;

use App\Filament\Resources\PagoResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class CreatePago extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Pago';
    }

    protected static string $resource = PagoResource::class;
    
}
