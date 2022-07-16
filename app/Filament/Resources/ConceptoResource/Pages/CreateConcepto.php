<?php

namespace App\Filament\Resources\ConceptoResource\Pages;

use App\Filament\Resources\ConceptoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateConcepto extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Concepto';
    }

    protected static string $resource = ConceptoResource::class;
}
