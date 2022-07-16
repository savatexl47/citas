<?php

namespace App\Filament\Resources\ProfesioneResource\Pages;

use App\Filament\Resources\ProfesioneResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProfesione extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Profesión';
    }

    protected static string $resource = ProfesioneResource::class;
}
