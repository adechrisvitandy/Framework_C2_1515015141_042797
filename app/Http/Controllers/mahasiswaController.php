<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
 public function awal()
    {
    	return "Hello dari mahasiswaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Adechrisvitandy';
    	$mahasiswa->nim = '1515015141';
    	$mahasiswa->alamat = 'Melak';
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
        
    	return "Data dengan Nama {$mahasiswa->nama} ,nim {$mahasiswa->nim} dan alamat {$mahasiswa->alamat} Telah Disimpan";
    	
    }
}
