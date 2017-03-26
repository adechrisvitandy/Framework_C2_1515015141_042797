<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
   public function awal()
    {
        return view('dosen_matakuliah.awal',['data'=>dosen_matakuliah::all()]);
    }
    public function tambah()
    {
        return view('dosen_matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new dosen_matakuliah();
        $dosen_matakuliah->nama = $input ;
        $dosen_matakuliah->nip = $input;
        $dosen_matakuliah->alamat = $input;
        $dosen_matakuliah->pengguna_id = $input; 
        $dosen_matakuliah = save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }
    public function lihat($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }
    public function update($id, Request $input)
    {
        $dosen_matakuliah = new dosen_matakuliah();
        $dosen_matakuliah->nama = $input ;
        $dosen_matakuliah->nip = $input;
        $dosen_matakuliah->alamat = $input;
        $dosen_matakuliah->pengguna_id = $input; 
        $dosen_matakuliah = save() ? 'Berhasil Update data' : 'gagal Update data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $informasi = $dosen_matakuliah-> delete()   ? 'Berhasil hapus data' : 'gagal hapus data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
}
