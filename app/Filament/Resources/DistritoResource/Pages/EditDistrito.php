<?php

namespace App\Filament\Resources\DistritoResource\Pages;

use App\Filament\Resources\DistritoResource;
use Filament\Resources\Pages\EditRecord;

class EditDistrito extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Distrito';
    }

    protected static string $resource = DistritoResource::class;
}
