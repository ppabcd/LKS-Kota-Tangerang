@extends('template.home')

@section('title')
Jabatan
@endsection
@section('content')
	<br>
	<a href="{{url('jabatan/add')}}"><button class="btn btn-primary">Tambah Jabatan</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th>Kode Jabatan</th>
				<th>Nama Jabatan</th>
				<th>Nominal Tunjangan</th>
				<th>Nominal Gaji</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($jab as $jj)
			<tr>
				<td>{{$jj->kode_jabatan}}</td>
				<td>{{$jj->nama_jabatan}}</td>
				<td>Rp.{{\App\Http\Helpers::rp($jj->tunjangan)}}</td>
				<td>Rp.{{\App\Http\Helpers::rp($jj->gaji)}}</td>
				<td>
					<a href="{{url('/jabatan/edit/'.$jj->kode_jabatan)}}"><button class="btn btn-primary">Edit</button></a>
					<a href="{{url('/jabatan/delete/'.$jj->kode_jabatan)}}"><button class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection