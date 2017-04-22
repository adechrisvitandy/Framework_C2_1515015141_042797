<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login','sesiController@form');
Route::post('/login','sesiController@validasi');
Route::get('/logout','sesiController@logout');
Route::get('/','sesiController@index');





Route::get('/coba5', function(Illuminate\Http\Request $request)
{
	echo "iniadalah request dari method get" . $request->nama;
});




use Illuminate\Http\Request;
Route::get('/coba6', function()
{
	echo Form::open(['url'=>'/coba6']).
	Form::label('nama').
	Form::text('nama',null).
	Form::submit('kirim').
	Form::close();
}
);

Route::post('/coba6', function (Request $request)
{
	echo "ini adalah hasil dari form input" . $request->nama;
}
);





Route::get('/coba', function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%a%');
	})->with('dosen')->groupBy('dosen_id')->get();
});

Route::get('/coba2', function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%a%');
	})->orWhereHas('matakuliah',function($kueri)
	{
		$kueri->where('title','like','%d%');
	})->with('dosen','matakuliah')->groupBy('dosen_id')->get();
});

Route::get('/coba3', function()
{
	return \App\jadwal_matakuliah::whereHas('mahasiswa',function($query)
	{
		$query->where('nama','like','%a%');
	})->with('mahasiswa')->groupBy('mahasiswa_id')->get();
});

Route::get('/coba4', function()
{
	return \App\jadwal_matakuliah::whereHas('mahasiswa',function($query)
	{
		$query->where('nama','like','%a%');
	})->orWhereHas('ruangan',function($kueri)
	{
		$kueri->where('title','like','%d%');
	})->with('mahasiswa','ruangan')->groupBy('mahasiswa_id')->get();
});

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiHas2','RelationshipRebornController@ujiHas2');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');
Route::get('ujiDoesntHave2','RelationshipRebornController@ujiDoesntHave2');


Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}', 'jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahController@hapus');
Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah', 'jadwal_matakuliahController@awal');
 
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}', 'dosen_matakuliahController@lihat');

Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');

Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'dosen_matakuliahController@edit');

Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');

Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');

Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahController@tambah');

Route::get('dosen_matakuliah', 'dosen_matakuliahController@awal');

Route::get('dosen/lihat/{dosen}', 'dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}', 'dosenController@edit');

Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');
Route::get('dosen/tambah', 'dosenController@tambah');
Route::get('dosen', 'dosenController@awal');

Route::get('mahasiswa/lihat/{mahasiswa}', 'mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');

Route::get('mahasiswa/edit/{mahasiswa}', 'mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');

Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');
Route::get('mahasiswa/tambah', 'mahasiswaController@tambah');
Route::get('mahasiswa', 'mahasiswaController@awal');

Route::get('matakuliah/lihat/{matakuliah}', 'matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');

Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');
Route::get('matakuliah/tambah', 'matakuliahController@tambah');
Route::get('matakuliah', 'matakuliahController@awal');

Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');

Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');
Route::get('ruangan/tambah', 'ruanganController@tambah');
Route::get('ruangan', 'ruanganController@awal');


Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna','penggunaController@awal');



Route::get('/', function () {
    return view('master');
});
Route::get('/public', function () {
    return ('Nama saya : Adechrisvitandy');
});
Route::get('hello-word', function () {
    return ('Hello word');
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return ("Hello word dari pengguna $pengguna");
});

