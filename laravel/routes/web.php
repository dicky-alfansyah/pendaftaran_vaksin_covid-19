<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\ExportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route group index*/
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/pendaftaran-vaksin/dosiske=1', 'vaksin1');
    Route::get('/pendaftaran-vaksin/dosiske=2', 'vaksin2');
    Route::get('/pendaftaran-vaksin/dosiske=3', 'vaksin3');
    Route::get('/pendaftaran-vaksin/cek-status','cekstatus');
    Route::get('/pendaftaran-vaksin/cek-status-detail','detailstatus');

    Route::get('/pendaftaran-vaksin/dosiske-1=tutup', 'vaksin1_tutup');
    Route::get('/pendaftaran-vaksin/dosiske-2=tutup', 'vaksin2_tutup');
    Route::get('/pendaftaran-vaksin/dosiske-3=tutup', 'vaksin3_tutup');
});

/* Route group login & logout*/
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login'); /* Name merupakan nama route dari login*/
    Route::post('/login', 'auth_login');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::get('/logout','logout');
    
});

Route::group(['middleware' => 'auth'], function(){
    Route::controller(ShowController::class)->group(function () {
        Route::get('/dashboard/pendaftaran-vaksin-dosiske=1', 'show_vaksin1');
        Route::get('/dashboard/pendaftaran-vaksin-dosiske=2', 'show_vaksin2');
        Route::get('/dashboard/pendaftaran-vaksin-dosiske=3', 'show_vaksin3');
    
        Route::get('/dashboard/form-control-vaksin=1', 'show_control_jenis_vaksin1');
        Route::get('/dashboard/form-control-vaksin=2', 'show_control_jenis_vaksin2');
        Route::get('/dashboard/form-control-vaksin=3', 'show_control_jenis_vaksin3');
    
        Route::get('/dashboard/data-pendaftar-vaksin', 'show_data');
    
        Route::get('/dashboard/form-add-jv-vaksin=1', 'form_add_1');
        Route::get('/dashboard/form-add-jv-vaksin=2', 'form_add_2');
        Route::get('/dashboard/form-add-jv-vaksin=3', 'form_add_3');    
    });  
});

Route::group(['middleware' => 'auth'], function(){
    Route::controller(DeleteController::class)->group(function () {
        Route::delete('/dashboard/delete-vaksin-1-id={jv}', 'delete_control_jenis_vaksin1');
        Route::delete('/dashboard/delete-vaksin-2-id={jv}', 'delete_control_jenis_vaksin2');
        Route::delete('/dashboard/delete-vaksin-3-id={jv}', 'delete_control_jenis_vaksin3');
    
        Route::get('/dashboard/delete-data-vaksin-status', 'delete_data');
    });
});


Route::controller(InsertController::class)->group(function () {

    Route::post('/dashboard/form-control-vaksin=1', 'add_control_jenis_vaksin1');
    Route::post('/dashboard/form-control-vaksin=2', 'add_control_jenis_vaksin2');
    Route::post('/dashboard/form-control-vaksin=3', 'add_control_jenis_vaksin3');

    Route::post('/pendaftaran-vaksin/dosiske=1', 'add_pendaftaran_vaksin1');
    Route::post('/pendaftaran-vaksin/dosiske=2', 'add_pendaftaran_vaksin2');
    Route::post('/pendaftaran-vaksin/dosiske=3', 'add_pendaftaran_vaksin3');
});

Route::controller(NotifController::class)->group(function () {
    Route::get('/pendaftaran-vaksin-1=success','info_vaksin_1');
    Route::get('/pendaftaran-vaksin-2=success','info_vaksin_2');
    Route::get('/pendaftaran-vaksin-3=success','info_vaksin_3');

    Route::get('/pendaftaran-vaksin/dosiske-1-active={c1}', 'show_vaksin1_active');
    Route::get('/pendaftaran-vaksin/dosiske-1-disabled={c1}', 'show_vaksin1_disabled');
    
    Route::get('/pendaftaran-vaksin/dosiske-2-active={c2}', 'show_vaksin2_active');
    Route::get('/pendaftaran-vaksin/dosiske-2-disabled={c2}', 'show_vaksin2_disabled');
    
    Route::get('/pendaftaran-vaksin/dosiske-3-active={c3}', 'show_vaksin3_active');
    Route::get('/pendaftaran-vaksin/dosiske-3-disabled={c3}', 'show_vaksin3_disabled');

});
Route::group(['middleware' => 'auth'], function(){
    Route::controller(UpdateController::class)->group(function () {
        Route::get('/dashboard/update-status-konfirmasi-vaksin1-id={jv}','update_status_konfirmasi_1');
        Route::get('/dashboard/update-status-konfirmasi-vaksin2-id={jv}','update_status_konfirmasi_2');
        Route::get('/dashboard/update-status-konfirmasi-vaksin3-id={jv}','update_status_konfirmasi_3');
    });
});

Route::controller(ExportController::class)->group(function () {
    Route::get('/dashboard/export-data','export');
    Route::get('/jadwal-vaksin/export-pdf-id={jv}','pdf');
});