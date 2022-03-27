<?php

namespace App\Http\Controllers;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Insert_pendaftaran_vaksin;
use DB;


class ExportController extends Controller
{
    public function export()
	{
		return Excel::download(new DataExport, 'Data Pendaftar Vaksin.xlsx');
	}

	public function pdf(Insert_pendaftaran_vaksin $jv)
	{
	    $data   = $jv->id;
        $getData = DB::table('data_pendaftaran_vaksin')->where('id', 'LIKE', '%' . $data . '%')->get();
		$pdf = PDF::loadView('admin.export.pdf',['data_pendaftaran_vaksin'=>$getData])->setPaper('a4');
        return $pdf->download('Cetak_Jadwal_Vaksin_Saya.pdf');
	}
	

    
}
