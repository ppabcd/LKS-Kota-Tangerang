@extends('template.home')

@section('title')
Edit Potongan
@endsection

@section('content')
<br>
	<form action="{{url('potongan/edit/'.$j->id_potongan)}}" method="post">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nama Potongan</label>
					<input class="form-control" name="nama_potongan" value="{{$j->nama_potongan}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nominal Potongan</label>
					<input class="form-control" name="nominal_potongan" value="{{$j->nominal_potongan}}" required></input>
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