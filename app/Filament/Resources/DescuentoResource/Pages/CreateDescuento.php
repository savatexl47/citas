<?php

namespace App\Filament\Resources\DescuentoResource\Pages;

use App\Filament\Resources\DescuentoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDescuento extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Descuento';
    }

    protected static string $resource = DescuentoResource::class;
}
