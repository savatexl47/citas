<?php

namespace App\Filament\Resources\EmpresaResource\Pages;

use App\Filament\Resources\EmpresaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmpresa extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Empresa';
    }

    protected static string $resource = EmpresaResource::class;
}
