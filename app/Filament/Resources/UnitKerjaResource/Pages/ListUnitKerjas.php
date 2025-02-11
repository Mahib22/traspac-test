<?php

namespace App\Filament\Resources\UnitKerjaResource\Pages;

use App\Filament\Resources\UnitKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitKerjas extends ListRecords
{
    protected static string $resource = UnitKerjaResource::class;
    protected static ?string $title = 'List Unit Kerja';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Unit Kerja'),
        ];
    }
}
