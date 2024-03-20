<?php

namespace App\Filament\Resources\DaftarDosenResource\Pages;

use App\Filament\Resources\DaftarDosenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarDosen extends EditRecord
{
    protected static string $resource = DaftarDosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
