<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Insert_jenis_vaksin;



class ShowController extends Controller
{
    
    public function show_vaksin1()
    {
       

        $dosis = 'Pertama';
        $konfirmasi = 'Vaksin 1 Belum Dikonfirmasi';
        $filterData = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis . '%')
                                                          ->where('status', 'LIKE', '%' . $konfirmasi . '%')->simplePaginate(7);

        $control = 'vaksin_1';
        $controlData = DB::table('control_form')->where('nama_form', 'LIKE', '%' . $control . '%')
                ->get();

        return view('admin.data.vaksin1',['data_pendaftaran_vaksin'  => $filterData,'control_form' =>  $controlData]);
    }
    public function show_vaksin2()
    {
        $dosis = 'Kedua';
        $konfirmasi = 'Vaksin 2 Belum Dikonfirmasi';
        $filterData = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis . '%')
                                                          ->where('status', 'LIKE', '%' . $konfirmasi . '%')->simplePaginate(7);

        $control = 'vaksin_2';
        $controlData = DB::table('control_form2')->where('nama_form', 'LIKE', '%' . $control . '%')
                    ->get();

        return view('admin.data.vaksin2', ['data_pendaftaran_vaksin'  => $filterData,'control_form2' =>  $controlData]);
    }
    public function show_vaksin3()
    {
        $dosis = 'Booster';
        $konfirmasi = 'Vaksin 3 Belum Dikonfirmasi';
        $filterData = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis . '%')
                                                          ->where('status', 'LIKE', '%' . $konfirmasi . '%')->simplePaginate(7);

        $control = 'vaksin_3';
        $controlData = DB::table('control_form3')->where('nama_form', 'LIKE', '%' . $control . '%')
                        ->get();

        return view('admin.data.vaksin3', ['data_pendaftaran_vaksin'  => $filterData,'control_form3' =>  $controlData]);
    }

    public function show_control_jenis_vaksin1()
    {
        $form_vaksin = '1';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('admin.data.form_control_1', ['jv_form' => $filterData ]);
    }
    public function show_control_jenis_vaksin2()
    {
        $form_vaksin = '2';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('admin.data.form_control_2', ['jv_form' => $filterData ]);
    }
    public function show_control_jenis_vaksin3()
    {
        $form_vaksin = '3';
        $filterData = DB::table('jv_form')->where('form_vaksin_dosis', 'LIKE', '%' . $form_vaksin . '%')
            ->get();
        return view('admin.data.form_control_3', ['jv_form' => $filterData ]);
    }

    public function form_add_1 ()
    {
        return view('admin.data.add_form_v1');
    }
    public function form_add_2 ()
    {
        return view('admin.data.add_form_v2');
    }
    public function form_add_3 ()
    {
        return view('admin.data.add_form_v3');
    }

    
    public function form_edit_1 (Insert_jenis_vaksin $jv)
    {
        return view('admin.data.edit_form_v1', compact('jv'));
    }
    public function form_edit_2 (Insert_jenis_vaksin $jv)
    {
        return view('admin.data.edit_form_v2', compact('jv'));
    }
    public function form_edit_3 (Insert_jenis_vaksin $jv)
    {
        return view('admin.data.edit_form_v3', compact('jv'));
    }

    public function show_data ()
    {
        $konfirmasi = 'Sudah Dikonfirmasi';
        $Data = DB::table('data_pendaftaran_vaksin')->where('status', 'LIKE', '%' . $konfirmasi . '%')->simplePaginate(11);

        return view('admin.data.data',['data_pendaftaran_vaksin' => $Data]);
    }

}
