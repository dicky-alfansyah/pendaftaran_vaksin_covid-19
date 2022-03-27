<?php

namespace App\Http\Controllers;
use App\Models\Insert_pendaftaran_vaksin;
use Carbon\Carbon;



class UpdateController extends Controller
{
   
    public function update_status_konfirmasi_1(Insert_pendaftaran_vaksin $jv)
    {
        $besok = Carbon::tomorrow('Asia/Jakarta');

        Insert_pendaftaran_vaksin::where('id', $jv->id)
        ->update([
            'status' => 'Sudah Dikonfirmasi',
            'jadwal_vaksin' => $besok
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=1');
    }

    public function update_status_konfirmasi_2(Insert_pendaftaran_vaksin $jv)
    {
        $besok = Carbon::tomorrow('Asia/Jakarta');

        Insert_pendaftaran_vaksin::where('id', $jv->id)
        ->update([
            'status' => 'Sudah Dikonfirmasi',
            'jadwal_vaksin' => $besok
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=2');
    }
    public function update_status_konfirmasi_3(Insert_pendaftaran_vaksin $jv)
    {
        $besok = Carbon::tomorrow('Asia/Jakarta');

        Insert_pendaftaran_vaksin::where('id', $jv->id)
        ->update([
            'status' => 'Sudah Dikonfirmasi',
            'jadwal_vaksin' => $besok
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=3');
    }

}
