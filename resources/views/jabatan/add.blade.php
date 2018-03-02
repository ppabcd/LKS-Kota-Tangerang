@extends('template.home')

@section('title')
Tambah Jabatan
@endsection

@section('content')
<br>
	<form action="{{url('jabatan/add')}}" method="post">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Kode Jabatan</label>
					<input class="form-control" name="kode_jabatan" value="{{old('kode_jabatan')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nama Jabatan</label>
					<input class="form-control" name="nama_jabatan" value="{{old('nama_jabatan')}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Tunjangan</label>
					<input type="number" class="form-control" name="tunjangan" value="{{old('tunjangan')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Gaji</label>
					<input type="number" class="form-control" name="gaji" value="{{old('gaji')}}" required></input>
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