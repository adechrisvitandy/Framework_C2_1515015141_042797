<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    //
   	protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen()
    {
        return $this->belongsTo(dosen::class);//method fungsi dosen yg meliki statmen return  $this yang berisi fungsi BelongsTo dosen ::class yang dimaksud BelongsTo adalah fusngi untuk memberitahu bahwa class dosen_matakuliah ini memiliki relasi dengan penggunna
    }
    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class);//method fungsi matakuliah yg meliki statmen return  $this yang berisi fungsi BelongsTo matauliah ::class yang dimaksud BelongsTo adalah fusngi untuk memberitahu bahwa class dosen_matakuliah ini memiliki relasi dengan matakuliah
    }
       public function jadwal_matakuliah(){
        return $this->hasMany(jadwal_matakuliah::class);//method fungsi jadwal_matakuliah yg berisi statmennt return $this yg isinya adalah Has Many
        //has many sendiri merupakan fungsi untuk memberitau  bahwa class dosen_matakuliah ini memiliki relasi 1:m Jadwal_matakuliah
    }
       public function listDosenDanMatakuliah(){
      $out =[];
      foreach ($this->all() as $dosenmatakuliah){
        $out[$dosenmatakuliah->id] = "{$dosenmatakuliah->dosen->nama} (matakuliah {$dosenmatakuliah->matakuliah->title})";
      }
      return $out;
    }
}
