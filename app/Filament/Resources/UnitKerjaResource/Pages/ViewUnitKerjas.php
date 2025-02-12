<?php

namespace App\Filament\Resources\UnitKerjaResource\Pages;

use App\Filament\Resources\UnitKerjaResource;
use App\Filament\Resources\UnitKerjaResource\RelationManagers\PegawaisRelationManager;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewUnitKerjas extends ViewRecord
{
    protected static string $resource = UnitKerjaResource::class;
    protected static ?string $title = 'Daftar Pegawai';

    public function getRelationManagers(): array
    {
        return [
            PegawaisRelationManager::class
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->label('Nama Unit Kerja')
            ]);
    }
}
