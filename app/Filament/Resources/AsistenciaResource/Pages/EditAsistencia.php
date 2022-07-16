<?php

namespace App\Filament\Resources\AsistenciaResource\Pages;

use App\Filament\Resources\AsistenciaResource;
use Filament\Resources\Pages\EditRecord;

class EditAsistencia extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Asistencia';
    }

    protected static string $resource = AsistenciaResource::class;
}
