<?php

namespace App\Filament\Resources\DistritoResource\Pages;

use App\Filament\Resources\DistritoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDistrito extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Distrito';
    }

    protected static string $resource = DistritoResource::class;
}
