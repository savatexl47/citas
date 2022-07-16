<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Tarjeta';
    }

    protected static string $resource = UserResource::class;
}
