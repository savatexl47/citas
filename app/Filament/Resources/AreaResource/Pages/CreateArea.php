<?php

namespace App\Filament\Resources\AreaResource\Pages;

use App\Filament\Resources\AreaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateArea extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Area';
    }

    protected static string $resource = AreaResource::class;
}
