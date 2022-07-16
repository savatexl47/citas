<?php

namespace App\Filament\Resources\CargoResource\Pages;

use App\Filament\Resources\CargoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCargo extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Cargo';
    }

    protected static string $resource = CargoResource::class;
}
