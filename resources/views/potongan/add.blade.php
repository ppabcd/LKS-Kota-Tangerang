@extends('template.home')

@section('title')
Tambah Potongan
@endsection

@section('content')
<br>
	<form action="{{url('potongan/add')}}" method="post">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nama Potongan</label>
					<input class="form-control" name="nama_potongan" value="{{old('nama_potongan')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Potongan</label>
					<input class="form-control" name="nominal_potongan" value="{{old('nominal_potongan')}}" required></input>
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