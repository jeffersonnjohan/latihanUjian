<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function(){
    return view('profile.profileMahasiswa', [
        'nama' => 'Jefferson Johan',
        'NIM' => '2502041224',
        'cawu' => 5
    ]);
});

Route::get('/dosen/{namaDosen}', function($namaDosen){
    return view('profile.profileDosen', [
        'nama' => $namaDosen
    ]);
});

Route::redirect('/iniLinkYangSalah', '/mahasiswa');

Route::prefix('/admin')->group(function(){
    Route::get('/listDosen', function(){
        return view('admin.listDosen');
    });

    Route::get('/listMahasiswa', function(){
        return view('admin.listMahasiswa');
    });
});


Route::get('/admin/listDosen', function(){
    return view('admin.listDosen');
});

Route::get('/admin/listMahasiswa', function(){
    return view('admin.listDosen');
});

Route::get('/statusMahasiswa', function(){
    $mahasiswas = [
        [
            'nama' => 'Jefferson Johan',
            'status' => 'Aktif'
        ],
        [
            'nama' => 'Brychan Artanto',
            'status' => 'Cuti'
        ],
        [
            'nama' => 'Riskya Putra Sembiring',
            'status' => 'Tidak Aktif'
        ]
    ];

    return view('status.statusMahasiswa', [
        'mahasiswas' => $mahasiswas
    ]);
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/allMahasiswa', [MahasiswaController::class, 'all']);

Route::get('/insertMahasiswa', [MahasiswaController::class, 'insert']);

Route::get('/singleMahasiswa/{id}', [MahasiswaController::class, 'single']);

Route::get('/updateMahasiswa/{id}', [MahasiswaController::class, 'update']);

Route::get('/deleteMahasiswa/{id}', [MahasiswaController::class, 'delete']);

Route::get('/smartMahasiswa', [MahasiswaController::class, 'smartMahasiswa']);

Route::get('/urutNama', [MahasiswaController::class, 'urutNama']);

Route::get('/orCondition', [MahasiswaController::class, 'orCondition']);
