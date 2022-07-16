<?php

namespace App\Filament\Resources\AsociadoResource\Pages;

use App\Filament\Resources\AsociadoResource;
use Filament\Resources\Pages\EditRecord;

class EditAsociado extends EditRecord
{
     protected function getTitle(): string
    {
        return 'Editar Asociado';
    }

    protected static string $resource = AsociadoResource::class;
}
