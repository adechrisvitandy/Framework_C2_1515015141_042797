<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;
use App\mahasiswa;

class RelationshipRebornController extends Controller
{
    public function ujiHas(){

    	return dosen::has('dosen_matakuliah')->get();
    }

     public function ujiHas2(){

    	return mahasiswa::has('jadwal_matakuliah')->get();
    }

    public function ujiDosenhave(){

    return dosen::doesntHave('dosen_matakuliah')->get();

    }
    public function ujiDosenhave2(){

    	  return dosen::doesntHave('jadwal_matakuliah')->get();
    }



}
