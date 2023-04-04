<?php

use Illuminate\Support\Facades\Route;
use App\Imports\EvaluasiImport;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pelatihan', 'HomeController@pelatihan')->name('pelatihan');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homedefault', 'HomeController@homeDefault')->name('homedefault');

// spm 
Route::get('/spm', 'SpmController@index')->name('spm');
Route::get('/{id}/edit', 'SpmController@edit')->name('spmEdit');
Route::post('/spm/store', 'SpmController@store')->name('spmStore');

// poli 
Route::get('/poli', 'PoliController@index')->name('poli');
Route::get('/poli/{id}', 'PoliController@detail')->name('poliDetail');
Route::post('/poli/store', 'PoliController@store')->name('PoliStore');
Route::post('/poli/storeRiwayat', 'PoliController@storeRiwayat')->name('PoliStoreRiwayat');
Route::delete('/poli/delete/{id}', 'PoliController@destroy');
Route::delete('/poli/riwayat/delete/{id}', 'PoliController@destroyRiwayat');
Route::get('/poli/{id}/edit', 'PoliController@edit')->name('pasienEdit');
Route::patch('/poli/update', 'PoliController@update')->name('pasienUpdate');

// barang 
Route::get('/barang', 'BarangController@index')->name('barang');
Route::get('/obat', 'BarangController@index')->name('obat');
Route::post('/barang/store', 'BarangController@store')->name('barangStore');
Route::delete('/barang/delete/{id}', 'BarangController@destroy');
Route::get('/barang/{id}/edit', 'BarangController@edit')->name('barangEdit');
Route::patch('/barang/update', 'BarangController@update')->name('barangUpdate');


// file 
Route::post('/file_nota_dinas/store', 'FilesController@notaDinasStore');
Route::post('/file_spt/store', 'FilesController@sptStore');
Route::post('/file_dokumen/store', 'FilesController@dokumenStore');
Route::post('/file_spm/store', 'FilesController@spmStore');
Route::get('/file/download/{filename}/{nama}', 'FilesController@download'); //Download File


// Arsip Keuangan
Route::get('/arsip', 'ArsipController@index')->name('arsip');
Route::post('/arsip/store', 'ArsipController@store')->name('arsipStore');
Route::delete('/arsip/delete/{id}', 'ArsipController@destroy');


// File
Route::get('/file/{id}', 'FileController@index')->name('file');
Route::post('/file/store', 'FileController@store')->name('fileStore');
Route::delete('/file/delete/{id}', 'FileController@destroy');

// new
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/pedomandansop', 'HomeController@pedomansop')->name('pedomansop');
Route::get('/sop', 'HomeController@sop')->name('sop');


// jabatan
Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
Route::post('/jabatan/store', 'JabatanController@store')->name('jabatanStore');
Route::delete('/jabatan/delete/{id}', 'JabatanController@destroy');

// user
Route::get('/user', 'HomeController@listUser')->name('user');
Route::get('/user/{id}/edit', 'HomeController@editUser')->name('userEdit');
Route::patch('/user/update', 'HomeController@updateUser')->name('userUpdate');


// SD
Route::get('/SD/{id}', 'SDController@index')->name('SD');
Route::post('/SD/store', 'SDController@store')->name('SDStore');
Route::delete('/SD/delete/{id}', 'SDController@destroy');

// tatausaha
Route::get('/tatausaha', 'TatausahaController@index')->name('tatausaha');
Route::get('/tatausaha/{id}', 'TatausahaController@content')->name('tatausaha_index');
Route::post('/tatausaha/store', 'TatausahaController@store')->name('TatausahaStore');
Route::delete('/tatausaha/delete/{id}', 'TatausahaController@destroy');
Route::get('/tatausaha/{id}/edit', 'TatausahaController@edit')->name('tatausahaEdit');
Route::delete('/tatausaha/deleteFile/{id}', 'TatausahaController@destroyFile');


Route::get('/logistik', 'SDController@logistik');
Route::get('/operasi', 'SDController@operasi');

Route::post('/user/store', 'HomeController@storeUser')->name('signup');


// absensi
Route::get('/absensi', 'AbsensiController@index');
Route::post('/absensi/store', 'AbsensiController@store');
Route::delete('/absensi/delete/{id}', 'AbsensiController@destroy');
Route::get('/absensi/{id}', 'AbsensiController@detail');
Route::patch('/absensiUser/update', 'AbsensiController@userUpdate');


// resiko
Route::get('/resiko', 'HomeController@resiko')->name('resiko');
Route::get('/resiko/tatausaha', 'TatausahaController@resiko')->name('tatausaha');
Route::get('/resiko/logistik', 'SDController@logistikresiko');
Route::get('/resiko/operasi', 'SDController@operasiresiko');


//pelatihan
Route::post('/pelatihan/store', 'PelatihanController@store')->name('PelatihanStore');
Route::delete('/pelatihan/delete/{id}', 'PelatihanController@destroy');


//Jadwal
Route::post('/jadwal/store', 'JadwalController@store')->name('JadwalStore');
Route::get('/sk/{id}', 'HomeController@skpdf')->name('skpdf');
Route::get('/jadwal/{id}', 'HomeController@jadwal')->name('jadwal');
Route::delete('/jadwal/delete/{id}', 'JadwalController@destroy');
Route::get('/jadwal/{id}/edit', 'JadwalController@editJadwal')->name('jadwalEdit');
Route::patch('/jadwal/update', 'JadwalController@updateJadwal')->name('jadwalUpdate');


Route::get('/kartukendali/{id}', 'HomeController@kartukendaliOld')->name('kartukendaliOld');
Route::get('/kartukendali/{month}/{year}/{id}', 'HomeController@kartukendali')->name('kartukendali');

//Evaluasi
Route::post('/evaluasi/store', 'EvaluasiController@store')->name('EvaluasiStore');
Route::post('/import/{id}', function ($id) {
    Excel::import(new EvaluasiImport($id), request()->file('file'));
    return redirect()->back()->with('success','Data Imported Successfully');
});

// penyelenggara
Route::post('/penyelenggara/store', 'PenyelenggaraController@store')->name('PenyelenggaraStore');
Route::get('/penyelenggara/{id}/edit', 'PenyelenggaraController@edit')->name('PenyelenggaraEdit');
Route::patch('/penyelenggara/update', 'PenyelenggaraController@update')->name('PenyelenggaraUpdate');
Route::delete('/penyelenggara/delete/{id}', 'PenyelenggaraController@destroy');

// setting
Route::get('/setting', 'SettingController@index');
Route::patch('/setting/update', 'SettingController@update')->name('settingUpdate');


// pejabat
Route::get('/pejabat', 'PejabatController@index');
Route::post('/pejabat/store', 'PejabatController@store');
Route::patch('/pejabat/update', 'PejabatController@update')->name('pejabatUpdate');

// kurikulum
Route::get('/kurikulum', 'KurikulumController@index');
Route::post('/kurikulum/store', 'KurikulumController@store');

//honor
Route::get('/honor/{month}/{year}/{id}', 'HomeController@honorpdf')->name('honorpdf');


Route::get('/formdaftar', 'FormController@index');
Route::get('/formsuccess', 'FormController@success');
Route::post('/formdaftar/store', 'FormController@store');

Route::get('/formlist', 'FormController@list');
