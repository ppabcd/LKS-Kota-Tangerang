@extends('template.home')

@section('title')
Edit Jabatan
@endsection

@section('content')
<br>
	<form action="{{url('jabatan/edit/'.$j->kode_jabatan)}}" method="post">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Kode Jabatan</label>
					<input class="form-control" value="{{$j->kode_jabatan}}" readonly></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nama Jabatan</label>
					<input class="form-control" name="nama_jabatan" value="{{$j->nama_jabatan}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Tunjangan</label>
					<input type="number" class="form-control" name="tunjangan" value="{{$j->tunjangan}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Gaji</label>
					<input type="number" class="form-control" name="gaji" value="{{$j->gaji}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3">
				<button class="btn btn-primary" type="submit">Submit</button>
				<button class="btn btn-danger" type="reset">Reset</button>
			</div>
			<div class="col-xs-1">
				<button class="btn btn-warning" onclick="window.history.back()">Kembali</button>
			</div>
		</div>
	</form>
@endsection