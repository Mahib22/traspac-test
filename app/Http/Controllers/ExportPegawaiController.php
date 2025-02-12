<?php

namespace App\Http\Controllers;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportPegawaiController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }
}
