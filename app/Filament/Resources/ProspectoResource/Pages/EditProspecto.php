<?php

namespace App\Filament\Resources\ProspectoResource\Pages;

use App\Filament\Resources\ProspectoResource;
use Filament\Resources\Pages\EditRecord;

class EditProspecto extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Prospecto';
    }

    protected static string $resource = ProspectoResource::class;
}
