<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public function home()
    {
      
        $control_1 = DB::table('control_form')->get();
        $control_2 = DB::table('control_form2')->get();
        $control_3 = DB::table('control_form3')->get();
                    
        return view('index',['control_form'  => $control_1,'control_form2' => $control_2,'control_form3' => $control_3]);
    }

    public function vaksin1()
    {
        $form_vaksin = '1';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('vaksin_satu.index',['jv_form' => $filterData]);
    }
    public function vaksin2()
    {
        $form_vaksin = '2';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('vaksin_dua.index',['jv_form' => $filterData]);
    }
    public function vaksin3()
    {
        $form_vaksin = '3';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('vaksin_tiga.index',['jv_form' => $filterData]);
    }
    public function cekstatus()
    {
       
        return view('cek_status.index');   
	
    }
    public function detailstatus(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required|size:16',
            'no_hp' => 'required|numeric',
         ]);
         
      
        $nik   = $request->nik;
        $no_hp   = $request->no_hp;
        $status   = 'Sudah Dikonfirmasi';
        $filterData = DB::table('data_pendaftaran_vaksin')->orderBy('id', 'desc',)->limit(1)
                                                           ->where('nik', 'LIKE', '%' . $nik . '%')
                                                           ->where('no_hp', 'LIKE', '%' . $no_hp . '%')
                                                           ->where('status', 'LIKE', '%' . $status . '%')
                                                           ->get();
        


        return view('cek_status.detail',['data_pendaftaran_vaksin'  => $filterData]);
    }

    public function vaksin1_tutup()
    {
        return view('vaksin_satu.disabled');
    }

    public function vaksin2_tutup()
    {
        return view('vaksin_dua.disabled');
    }
    public function vaksin3_tutup()
    {
        return view('vaksin_tiga.disabled');
    }

}
