<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);//fungsi return relasi dari mahasiswa ke pengguna
    }


     public function getUsernameAttribute(){ //method untuk mengambil usename 
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){///metoh untuk mengabil list mahasiswa dan nim
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
    
    public function jadwal_matakuliah() // fungsi return relasi  1:m dari mahasiswa ke jadwal matakuliah
    {
        return $this->hasMany(jadwal_matakuliah::class,'mahasiswa_id');
    }
    
}
