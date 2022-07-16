<?php

namespace App\Filament\Resources\DescuentoResource\Pages;

use App\Filament\Resources\DescuentoResource;
use Filament\Resources\Pages\EditRecord;

class EditDescuento extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Descuento';
    }

    protected static string $resource = DescuentoResource::class;
}
