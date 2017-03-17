<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunaController extends Controller
{
public function awal()
    {
    	return "Hello dari PenggunaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$pengguna = new Pengguna();
        $pengguna -> username = 'Adechrisx';
        $pengguna -> password = '1sampai5';
        $pengguna->save();
    	return "Data dengan username {$pengguna->username} Telah Disimpan";
    	
    }
}
