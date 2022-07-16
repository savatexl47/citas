<?php

namespace App\Filament\Resources\EmpresaResource\Pages;

use App\Filament\Resources\EmpresaResource;
use Filament\Resources\Pages\EditRecord;

class EditEmpresa extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Empresa';
    }

    protected static string $resource = EmpresaResource::class;
}
