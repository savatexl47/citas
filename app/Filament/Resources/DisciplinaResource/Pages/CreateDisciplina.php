<?php

namespace App\Filament\Resources\DisciplinaResource\Pages;

use App\Filament\Resources\DisciplinaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDisciplina extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Disciplina';
    }

    protected static string $resource = DisciplinaResource::class;
}
