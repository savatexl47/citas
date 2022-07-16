<?php

namespace App\Filament\Resources\AsistenciaResource\Pages;

use App\Filament\Resources\AsistenciaResource;
use Filament\Resources\Pages\CreateRecord;


class CreateAsistencia extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Asistencia';
    }

    protected static string $resource = AsistenciaResource::class;
}
