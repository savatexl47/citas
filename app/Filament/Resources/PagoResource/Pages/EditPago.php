<?php

namespace App\Filament\Resources\PagoResource\Pages;

use App\Filament\Resources\PagoResource;
use Filament\Resources\Pages\EditRecord;

class EditPago extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Pago';
    }

    protected static string $resource = PagoResource::class;
}
