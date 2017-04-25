<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContrast;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pengguna extends Authenticatable implements AuthenticatableContrast
{

    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    
    public function dosen()
    {
    	return $this->hasOne(dosen::class);
    }
    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }

}
