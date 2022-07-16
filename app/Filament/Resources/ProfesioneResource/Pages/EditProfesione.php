<?php

namespace App\Filament\Resources\ProfesioneResource\Pages;

use App\Filament\Resources\ProfesioneResource;
use Filament\Resources\Pages\EditRecord;

class EditProfesione extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Profesión';
    }

    protected static string $resource = ProfesioneResource::class;
}
