<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_Matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah'];
    
    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class);//fusngsi  relasi untuk menunjukan bahwa jadwal matakuliah memiliki  relasi dengan mahasiswa 
    }

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class);//fusngsi  relasi untuk menunjukan bahwa jadwal matakuliah memiliki  relasi dengan ruangan
    }

    public function dosen_matakuliah()
    {
        return $this->belongsTo(dosen_Matakuliah::class,'dosen_matakuliah');//fusngsi  relasi untuk menunjukan bahwa jadwal matakuliah memiliki  relasi dengan dosen_matakuliah
    }

    
}
