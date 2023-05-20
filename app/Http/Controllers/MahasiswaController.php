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

    public function single($id){
        return view('mahasiswa.singleMahasiswa', [
            'mahasiswa' => Mahasiswa::find($id)
        ]);
    }

    public function update($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = 'Hacked by L0CKB1T';
        $mahasiswa->save();
        return redirect('/allMahasiswa');
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/allMahasiswa');
    }

    public function smartMahasiswa(){
        return view('mahasiswa.allMahasiswa', [
            'mahasiswas' => Mahasiswa::where('ipk', '>', 4)->where('nama', 'Jefferson Johan')->get()
        ]);
    }

    public function urutNama(){
        return view('mahasiswa.allMahasiswa', [
            'mahasiswas' => Mahasiswa::orderBy('nama', 'desc')->get()
        ]);
    }
    
    public function orCondition(){
        return view('mahasiswa.allMahasiswa', [
            'mahasiswas' => Mahasiswa::where('nama', 'Jefferson Johan')
                                    ->orWhere('nama', 'Brychan Artanto')
                                    ->get()
        ]);
    }
}