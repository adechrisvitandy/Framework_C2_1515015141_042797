<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;

class jadwal_matakuliahController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        $kokAJGyah = jadwal_matakuliah::all();
        return view('jadwal_matakuliah.awal',['kokAJGyah'=>jadwal_matakuliah::all()]); 
    }
    public function tambah()
    {
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosen_matakuliah'));
    }
    public function simpan(Request $input)
    {
        $jadwalmatakuliah = new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah','mahasiswa_id'));
        if ($jadwalmatakuliah->save()) $this->informasi = 'Jadwal Mahasiswa Berhasil Di Simpan';

        return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
    }

    public function edit($id)
    {
        $jadwalmatakuliah = jadwal_matakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwalmatakuliah'));
    }
    public function lihat($id)
    {
        $jadwalmatakuliah = jadwal_matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwalmatakuliah));
    }
    public function update($id, Request $input)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        
        $jadwal_matakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save())$this->informasi="jadwal Mahasiswa telah di perbaharui";
       
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $jadwalmatakuliah = jadwal_matakuliah::find($id);    
        if ($jadwalmatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil di Hapus";
        return redirect('jadwal_matakuliah')->with(['informasi' =>$this->informasi]);
}
}