<?php

namespace App\Http\Controllers;

use App\Models\Insert_jenis_vaksin;
use App\Models\Insert_pendaftaran_vaksin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InsertController extends Controller
{
   
    public function add_control_jenis_vaksin1(Request $request)
    {
        $jv = new Insert_jenis_vaksin;
        $jv->form_vaksin_dosis= '1';
        $jv->nama_vaksin= $request->pilih_vaksin;

        $jv->save();

        return redirect('/dashboard/form-control-vaksin=1')->with('status', 'Data Berhasil Ditambahkan!');
    }
    public function add_control_jenis_vaksin2(Request $request)
    {
        $jv = new Insert_jenis_vaksin;
        $jv->form_vaksin_dosis= '2';
        $jv->nama_vaksin= $request->pilih_vaksin;

        $jv->save();

        return redirect('/dashboard/form-control-vaksin=2')->with('status', 'Data Berhasil Ditambahkan!');
    }
    public function add_control_jenis_vaksin3(Request $request)
    {
        $jv = new Insert_jenis_vaksin;
        $jv->form_vaksin_dosis= '3';
        $jv->nama_vaksin= $request->pilih_vaksin;

        $jv->save();

        return redirect('/dashboard/form-control-vaksin=3')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function add_pendaftaran_vaksin1(Request $request)
    {
        $sekarang = Carbon::now('Asia/Jakarta');

        $this->validate($request,[
            'nik' => 'required|size:16',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required'
         ]);
  
        $jv = new Insert_pendaftaran_vaksin;
        $jv->dosis_vaksin= 'Pertama';
        $jv->jenis_vaksin=$request->jenis_vaksin;
        $jv->nik=$request->nik;
        $jv->nama_lengkap=$request->nama_lengkap;
        $jv->tanggal_lahir=$request->tanggal_lahir;
        $jv->no_hp=$request->no_hp;
        $jv->alamat=$request->alamat;
        $jv->status= 'Vaksin 1 Belum Dikonfirmasi';
        $jv->jadwal_vaksin= $sekarang;
        $jv->save();

        return redirect('/pendaftaran-vaksin-1=success');
    }

    public function add_pendaftaran_vaksin2(Request $request)
    {
        $sekarang = Carbon::now('Asia/Jakarta');

        $this->validate($request,[
            'nik' => 'required|size:16',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required'
         ]);

        $jv = new Insert_pendaftaran_vaksin;
        $jv->dosis_vaksin= 'Kedua';
        $jv->jenis_vaksin=$request->jenis_vaksin;
        $jv->nik=$request->nik;
        $jv->nama_lengkap=$request->nama_lengkap;
        $jv->tanggal_lahir=$request->tanggal_lahir;
        $jv->no_hp=$request->no_hp;
        $jv->alamat=$request->alamat;
        $jv->status= 'Vaksin 2 Belum Dikonfirmasi';
        $jv->jadwal_vaksin= $sekarang;
        $jv->save();

        return redirect('/pendaftaran-vaksin-2=success');
    }
    public function add_pendaftaran_vaksin3(Request $request)
    {
        $sekarang = Carbon::now('Asia/Jakarta');

        $this->validate($request,[
            'nik' => 'required|size:16',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required'
         ]);
         
        $jv = new Insert_pendaftaran_vaksin;
        $jv->dosis_vaksin= 'Booster';
        $jv->jenis_vaksin=$request->jenis_vaksin;
        $jv->nik=$request->nik;
        $jv->nama_lengkap=$request->nama_lengkap;
        $jv->tanggal_lahir=$request->tanggal_lahir;
        $jv->no_hp=$request->no_hp;
        $jv->alamat=$request->alamat;
        $jv->status= 'Vaksin 3 Belum Dikonfirmasi';
        $jv->jadwal_vaksin= $sekarang;
        $jv->save();

        return redirect('/pendaftaran-vaksin-3=success');
    }



  
}
