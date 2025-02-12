<?php

use App\Http\Controllers\ExportPegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('filament.admin.auth.login');
});

Route::get('export-pegawai', ExportPegawaiController::class)->name('export-pegawai');
