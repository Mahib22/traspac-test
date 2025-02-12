<?php

namespace App\Filament\Resources\PegawaiResource\Pages;

use App\Filament\Resources\PegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPegawais extends ListRecords
{
    protected static string $resource = PegawaiResource::class;
    protected static ?string $title = 'List Pegawai';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Pegawai'),
            Actions\Action::make('pdf')
                ->label('Export')
                ->color('success')
                ->url(route('export-pegawai'))
                ->openUrlInNewTab(),
        ];
    }
}
