<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
public function awal()
    {
    	return "Hello dari ruanganController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$ruang = new ruangan();
    	$ruang -> title = 'MedakaBox';
    	$ruang->save();
        
    	return "Data dengan title {$ruang->title} Telah Disimpan";
    	
    }
}
