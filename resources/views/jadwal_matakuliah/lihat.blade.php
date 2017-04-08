@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_matakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Jadwal Matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Mahasiswsa</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliah->mahasiswa_id }}</td>
		</tr>	
		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliah->ruangan_id }}</td>
		</tr>	
		<tr>
			<td>Dosenmatakuliah</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliah->dosen_matakuliah }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_matakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
