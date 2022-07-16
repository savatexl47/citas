<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Resources\Pages\EditRecord;

class EditCategoria extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Categoría';
    }

    protected static string $resource = CategoriaResource::class;
}
