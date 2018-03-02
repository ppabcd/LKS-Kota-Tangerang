@extends('template.home')

@section('title')
Dashboard
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-4">
			<div class="box alert-success">
				<h1>{{$all}}</h1>
				<span>Total Karyawan</span>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="box alert-warning">
				<h1>{{$d}}</h1>
				<span>Karyawan Sudah Digaji</span>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="box alert-primary">
				<h1>{{$b}}</h1>
				<span>Karyawan Belum Digaji</span>
			</div>
		</div>
	</div>
	<br><br>
	<h3>Karyawan yang sudah digaji</h3>
	<div class="row">
		<div class="col-xs-3 list">
			@foreach($n as $k)
			<div class="row">
				<div class="col-xs-3">
					<div class="pl"></div>
				</div>
				<div class="col-xs-4">
					{{$k->nama}}
					{{$k->email}}
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection