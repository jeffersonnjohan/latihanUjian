<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function all(){
        return view('mahasiswa.allMahasiswa', [
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    public function insert(){
        Mahasiswa::create([
            'nama' => 'Riskya Putra Sembiring',
            'NIM' => '2502041267',
            'motto' => 'Jika tanpa kamu, aku tak dapat hidup lagi',
            'address' => 'Jalan Kemerdekaan Medan',
            'campus_id' => 5,
            'DOB' => '2003-04-22',
            'ipk' => 3.98,
            'cawu' => 3,
        ]);
    }
}