<?php

namespace App\Filament\Resources\UnitKerjaResource\RelationManagers;

use App\Filament\Resources\PegawaiResource;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class PegawaisRelationManager extends RelationManager
{
    protected static string $relationship = 'pegawais';
    protected static ?string $title = '';

    public function table(Table $table): Table
    {
        return PegawaiResource::table($table);
    }
}
