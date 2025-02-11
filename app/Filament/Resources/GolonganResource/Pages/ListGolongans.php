<?php

namespace App\Filament\Resources\GolonganResource\Pages;

use App\Filament\Resources\GolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGolongans extends ListRecords
{
    protected static string $resource = GolonganResource::class;
    protected static ?string $title = 'List Golongan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Golongan'),
        ];
    }
}
