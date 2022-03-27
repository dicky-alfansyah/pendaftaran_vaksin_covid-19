<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
    public function login()
    {
        return view('admin.login');
    }

    public function auth_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username salah atau tidak ditemukan',
        ]);
    }

    public function dashboard()
    {
        $dosis1 = 'Pertama';
        $konfirmasi1 = 'Vaksin 1 Belum Dikonfirmasi';
        $TampilData1 = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis1 . '%')
                                                           ->where('status', 'LIKE', '%' . $konfirmasi1 . '%')->count();

        $dosis2 = 'Kedua';
        $konfirmasi2 = 'Vaksin 2 Belum Dikonfirmasi';
        $TampilData2 = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis2 . '%')
                                                           ->where('status', 'LIKE', '%' . $konfirmasi2 . '%')->count();

        $dosis3 = 'Booster';
        $konfirmasi3 = 'Vaksin 3 Belum Dikonfirmasi';
        $TampilData3 = DB::table('data_pendaftaran_vaksin')->where('dosis_vaksin', 'LIKE', '%' . $dosis3 . '%')
                                                           ->where('status', 'LIKE', '%' . $konfirmasi3 . '%')->count();

        $konfirmasi = 'Sudah Dikonfirmasi';
        $TampilData4 = DB::table('data_pendaftaran_vaksin')->where('status', 'LIKE', '%' . $konfirmasi . '%')->count();

        return view('admin.index',compact('TampilData1', 'TampilData2', 'TampilData3','TampilData4'));
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
