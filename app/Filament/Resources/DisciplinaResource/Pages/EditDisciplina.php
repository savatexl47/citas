<?php

namespace App\Filament\Resources\DisciplinaResource\Pages;

use App\Filament\Resources\DisciplinaResource;
use Filament\Resources\Pages\EditRecord;

class EditDisciplina extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Disciplina';
    }

    protected static string $resource = DisciplinaResource::class;
}
