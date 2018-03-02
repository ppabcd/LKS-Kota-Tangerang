@extends('template.home')

@section('title')
Potongan
@endsection
@section('content')
	<br>
	<a href="{{url('potongan/add')}}"><button class="btn btn-primary">Tambah Potongan</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Potongan</th>
				<th>Nominal Potongan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1 ?>
			@foreach($jab as $jj)
			<tr>
				<td>{{$i}}</td>
				<td>{{$jj->nama_potongan}}</td>
				<td>Rp.{{\App\Http\Helpers::rp($jj->nominal_potongan)}},-</td>
				<td>
					<a href="{{url('/potongan/edit/'.$jj->id_potongan)}}"><button class="btn btn-primary">Edit</button></a>
					<a href="{{url('/potongan/delete/'.$jj->id_potongan)}}"><button class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
			<?php $i++ ?>
			@endforeach
		</tbody>
	</table>
@endsection