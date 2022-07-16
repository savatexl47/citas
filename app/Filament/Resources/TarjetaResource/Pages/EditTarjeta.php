<?php

namespace App\Filament\Resources\TarjetaResource\Pages;

use App\Filament\Resources\TarjetaResource;
use Filament\Resources\Pages\EditRecord;

class EditTarjeta extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Tarjeta';
    }

    protected static string $resource = TarjetaResource::class;
}
