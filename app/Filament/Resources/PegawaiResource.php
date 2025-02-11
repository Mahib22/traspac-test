<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\UnitKerja;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'List Pegawai';
    protected static ?string $slug = 'pegawai';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('nip')
                            ->label('NIP')
                            ->required()
                            ->numeric()
                            ->maxLength(12),

                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('tempat_lahir')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('alamat')
                            ->required(),

                        Forms\Components\DatePicker::make('tgl_lahir')
                            ->label('Tgl. Lahir')
                            ->native(false)
                            ->displayFormat('d F Y')
                            ->required(),

                        Forms\Components\Select::make('jenis_kelamin')
                            ->options([
                                'Laki-laki' => 'Laki-laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->required()
                            ->native(false),

                        Forms\Components\Select::make('golongan_id')
                            ->label('Golongan')
                            ->native(false)
                            ->options(Golongan::all()->pluck('name', 'id'))
                            ->required(),

                        Forms\Components\Select::make('eselon')
                            ->options([
                                'I' => 'I',
                                'II' => 'II',
                                'III' => 'III',
                            ])
                            ->required()
                            ->native(false),

                        Forms\Components\Select::make('jabatan_id')
                            ->label('Jabatan')
                            ->native(false)
                            ->options(Jabatan::all()->pluck('name', 'id'))
                            ->required(),

                        Forms\Components\TextInput::make('tempat_tugas')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Select::make('agama')
                            ->options([
                                'Islam' => 'Islam',
                                'Kristen' => 'Kristen',
                                'Katolik' => 'Katolik',
                                'Hindu' => 'Hindu',
                                'Budha' => 'Budha',
                                'Konghucu' => 'Konghucu',
                            ])
                            ->required()
                            ->native(false),

                        Forms\Components\Select::make('unit_kerja_id')
                            ->label('Unit Kerja')
                            ->native(false)
                            ->options(UnitKerja::all()->pluck('name', 'id'))
                            ->required(),

                        Forms\Components\TextInput::make('no_hp')
                            ->label('No. Hp')
                            ->required()
                            ->numeric()
                            ->maxLength(12),

                        Forms\Components\TextInput::make('npwp')
                            ->label('NPWP')
                            ->required()
                            ->numeric()
                            ->maxLength(12),

                        Forms\Components\FileUpload::make('foto')
                            ->image()
                            ->required()
                            ->maxSize(1024)
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->emptyStateHeading('No data found')
            ->columns([
                ImageColumn::make('foto')
                    ->circular(),
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('golongan.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jabatan.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('unitKerja.name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('golongan')
                    ->relationship('golongan', 'name'),
                Tables\Filters\SelectFilter::make('jabatan')
                    ->relationship('jabatan', 'name'),
                Tables\Filters\SelectFilter::make('unitKerja')
                    ->relationship('unitKerja', 'name')
            ])
            ->actions([
                Tables\Actions\Action::make('detail')
                    ->infolist([
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('nip')
                                    ->label('NIP'),
                                TextEntry::make('nama'),
                                TextEntry::make('tempat_lahir'),
                                TextEntry::make('alamat'),
                                TextEntry::make('tgl_lahir')
                                    ->label('Tgl. Lahir')
                                    ->formatStateUsing(function ($state) {
                                        Carbon::setLocale('id');
                                        return Carbon::parse($state)->translatedFormat('d F Y');
                                    }),
                                TextEntry::make('jenis_kelamin'),
                                TextEntry::make('golongan.name')
                                    ->label('Golongan'),
                                TextEntry::make('eselon'),
                                TextEntry::make('jabatan.name')
                                    ->label('Jabatan'),
                                TextEntry::make('tempat_tugas'),
                                TextEntry::make('agama'),
                                TextEntry::make('unitKerja.name')
                                    ->label('Unit Kerja'),
                                TextEntry::make('no_hp')
                                    ->label('No. Hp'),
                                TextEntry::make('npwp')
                                    ->label('NPWP'),
                                ImageEntry::make('foto')
                                    ->circular()
                                    ->height(100)
                            ])
                    ])
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPegawais::route('/'),
        ];
    }
}
