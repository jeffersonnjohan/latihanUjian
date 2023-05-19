<?php

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

