<?php

namespace App\Filament\Resources\TarjetaResource\Pages;

use App\Filament\Resources\TarjetaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTarjeta extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Tarjeta';
    }

    protected static string $resource = TarjetaResource::class;
}
