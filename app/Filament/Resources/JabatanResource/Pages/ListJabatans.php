<?php

namespace App\Filament\Resources\JabatanResource\Pages;

use App\Filament\Resources\JabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJabatans extends ListRecords
{
    protected static string $resource = JabatanResource::class;
    protected static ?string $title = 'List Jabatan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Jabatan'),
        ];
    }
}
