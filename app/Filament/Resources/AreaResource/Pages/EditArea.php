<?php

namespace App\Filament\Resources\AreaResource\Pages;

use App\Filament\Resources\AreaResource;
use Filament\Resources\Pages\EditRecord;

class EditArea extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Area';
    }

    protected static string $resource = AreaResource::class;
}
