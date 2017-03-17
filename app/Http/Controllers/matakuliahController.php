<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;


class matakuliahController extends Controller
{
   public function awal()
    {
    	return "Hello dari matakuliahController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah -> title = 'PBJ';
    	$matakuliah -> keterangan = "Pemrogram bebasis Jaringan ";

    	$matakuliah->save();
        
    	return "Data dengan title {$matakuliah->title} dan keterangan {$matakuliah->keterangan} Telah Disimpan";
    	
    }
}
