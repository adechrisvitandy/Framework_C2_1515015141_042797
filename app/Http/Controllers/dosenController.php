<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
     public function awal()
    {
    	return "Hello dari dosenController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen -> nama = 'Saitama';
    	$dosen -> nip = '9999999999';
    	$dosen -> alamat = 'Z city';
    	$dosen -> pengguna_id = 1;

    	$dosen->save();
    	return "Data dengan nama {$dosen->nama} dengan nip {$dosen->nip} dan alamat {$dosen->alamat} Telah Disimpan";
    	
    }

}
