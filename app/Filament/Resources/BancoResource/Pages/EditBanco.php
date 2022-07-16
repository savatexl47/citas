<?php

namespace App\Filament\Resources\BancoResource\Pages;

use App\Filament\Resources\BancoResource;
use Filament\Resources\Pages\EditRecord;

class EditBanco extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Banco';
    }

    protected static string $resource = BancoResource::class;
}
