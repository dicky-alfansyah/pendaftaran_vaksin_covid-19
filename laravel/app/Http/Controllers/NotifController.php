<?php

namespace App\Http\Controllers;

use App\Models\Form_control;
use App\Models\Form_control2;
use App\Models\Form_control3;
use Illuminate\Support\Facades\DB;

class NotifController extends Controller
{
    public function info_vaksin_1()
    {
        $dosis = 'Pertama';
        $filterData = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis . '%')
            ->get();
        return view('vaksin_satu.info', ['data_pendaftaran_vaksin' => $filterData]);
    }
    public function info_vaksin_2()
    {
        return view('vaksin_dua.info');
    }
    public function info_vaksin_3()
    {
        return view('vaksin_tiga.info');
    }

    public function show_vaksin1_active(Form_control $c1)
    {
        Form_control::where('id', $c1->id)
        ->update([
            'url' => 'dosiske=1',
            'status' => 'Active',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=1');
    }

    public function show_vaksin1_disabled(Form_control $c1)
    {
        Form_control::where('id', $c1->id)
        ->update([
            'url' => 'dosiske-1=tutup',
            'status' => 'Disabled',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=1');
    }
    public function show_vaksin2_active(Form_control2 $c2)
    {
        Form_control2::where('id', $c2->id)
        ->update([
            'url' => 'dosiske=2',
            'status' => 'Active',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=2');
    }

    public function show_vaksin2_disabled(Form_control2 $c2)
    {
        Form_control2::where('id', $c2->id)
        ->update([
            'url' => 'dosiske-2=tutup',
            'status' => 'Disabled',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=2');
    }
    public function show_vaksin3_active(Form_control3 $c3)
    {
        Form_control3::where('id', $c3->id)
        ->update([
            'url' => 'dosiske=3',
            'status' => 'Active',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=3');
    }

    public function show_vaksin3_disabled(Form_control3 $c3)
    {
        Form_control3::where('id', $c3->id)
        ->update([
            'url' => 'dosiske-3=tutup',
            'status' => 'Disabled',
        ]);
        return redirect('/dashboard/pendaftaran-vaksin-dosiske=3');
    }



    

    

}
