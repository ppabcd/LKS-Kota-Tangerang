@extends('template.home')

@section('title')
Karyawan
@endsection
@section('content')
	<br>
	<a href="{{url('karyawan/add')}}"><button class="btn btn-primary">Tambah Karyawan</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th>NIP</th>
				<th>Nama Jabatan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No. Telp</th>
				<th>Username</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($jab as $jj)
			<tr>
				<td>{{$jj->nip}}</td>
				<td>{{$jj->jabatan->nama_jabatan}}</td>
				<td>{{$jj->nama}}</td>
				<td>{{$jj->alamat}}</td>
				<td>{{$jj->no_telp}}</td>
				<td>{{$jj->username}}</td>
				<td>
					<a href="{{url('/karyawan/edit/'.$jj->nip)}}"><button class="btn btn-primary">Edit</button></a>
					<a href="{{url('/karyawan/delete/'.$jj->nip)}}"><button class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection