<?php

namespace App\Filament\Resources\BancoResource\Pages;

use App\Filament\Resources\BancoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBanco extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Banco';
    }

    protected static string $resource = BancoResource::class;
}
