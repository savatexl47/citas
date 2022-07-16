<?php

namespace App\Filament\Resources\ConceptoResource\Pages;

use App\Filament\Resources\ConceptoResource;
use Filament\Resources\Pages\EditRecord;

class EditConcepto extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Concepto';
    }

    protected static string $resource = ConceptoResource::class;
}
