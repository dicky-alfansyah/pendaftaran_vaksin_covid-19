<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class DataExport implements FromView
{
    public function view(): View
    {
        $get_data = 'Sudah Dikonfirmasi';
        $Data = DB::table('data_pendaftaran_vaksin')->where('status', 'LIKE', '%' . $get_data . '%')
                ->get();

        return view('admin.export.table',['data_pendaftaran_vaksin' => $Data]);
    }
   
}
