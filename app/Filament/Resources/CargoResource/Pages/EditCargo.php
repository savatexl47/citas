<?php

namespace App\Filament\Resources\CargoResource\Pages;

use App\Filament\Resources\CargoResource;
use Filament\Resources\Pages\EditRecord;

class EditCargo extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Cargo';
    }

    protected static string $resource = CargoResource::class;
}
