<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function pengguna() 
    {
    	return $this->belongsTo(pengguna::class);//method fungsi pengguna yg meliki statmen return  $this yang berisi fungsi BelongsTo pengguna ::class yang dimaksud BelongsTo adalah fusngi untuk memberitahu bahwa class dosen ini memiliki relasi dengan penggunna
    }


    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class);//method fungsi dosen_matakuliah yg berisi statmennt return $this yg isinya adalah Has Many
        //has many sendir merupakan fungsi untuk memberitau  bahwa class dosen ini memiliki relasi 1:m dengan dosematakuliah 
    }
    public function listDosenDanNIP()
  {
    $out = [];
    foreach ($this->all() as $dsn){
      $out[$dsn->id] = "{$dsn->nama}({$dsn->nip})";
    } 
    return $out;  
  }
}
