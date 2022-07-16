<?php

namespace App\Filament\Resources\PlaneResource\Pages;

use App\Filament\Resources\PlaneResource;
use Filament\Resources\Pages\EditRecord;

class EditPlane extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Plan';
    }

    protected static string $resource = PlaneResource::class;
}
