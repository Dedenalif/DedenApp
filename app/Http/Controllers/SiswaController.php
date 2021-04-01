<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::join('kelas','siswa.kelas_id' ,'=','kelas.id')
                        ->select('siswa.id','nama_lengkap','kelas.name as kelas','alamat')
                        ->get();
        return view('siswa.index', compact('siswa'));
    }



    public function tambah()
    {
        $kelas = Kelas::all();
        return view('siswa.tambah',compact('kelas'));
    }

    public function store(Request $request)
    {
        $siswa = Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'kelas_id' => $request->kelas_id,
            'alamat' => $request->alamat,
        ]);

        return redirect('data-siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->back();
    }
}
