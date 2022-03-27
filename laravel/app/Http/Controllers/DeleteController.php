<?php

namespace App\Http\Controllers;
use App\Models\Insert_jenis_vaksin;
use App\Models\Insert_pendaftaran_vaksin;


class DeleteController extends Controller
{
   
    public function delete_control_jenis_vaksin1(Insert_jenis_vaksin $jv)
    {
        Insert_jenis_vaksin::destroy($jv->id);
        return redirect('/dashboard/form-control-vaksin=1')->with('status', 'Data Berhasil Dihapus!');
    }

    public function delete_control_jenis_vaksin2(Insert_jenis_vaksin $jv)
    {
        Insert_jenis_vaksin::destroy($jv->id);
        alert()->success('Data berhasil dihapus!');
        return redirect('/dashboard/form-control-vaksin=2')->with('status', 'Data Berhasil Dihapus!');

    }
    public function delete_control_jenis_vaksin3(Insert_jenis_vaksin $jv)
    {
        Insert_jenis_vaksin::destroy($jv->id);
        alert()->success('Data berhasil dihapus!');
        return redirect('/dashboard/form-control-vaksin=3')->with('status', 'Data Berhasil Dihapus!');

    }
    public function delete_data(Insert_pendaftaran_vaksin $hapus_status)
    {
        $hapus_status = 'Sudah Dikonfirmasi';
        Insert_pendaftaran_vaksin::where('status', $hapus_status)->delete();
        return redirect('/dashboard/data-pendaftar-vaksin');
    }
    
}
