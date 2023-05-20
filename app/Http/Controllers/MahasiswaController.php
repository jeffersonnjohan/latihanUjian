<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public $mahasiswas = [
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
    public function all(){
        return view('mahasiswa.allMahasiswa', [
            'mahasiswas' => $this->mahasiswas
        ]);
    }
}
