@extends('template.home')

@section('title')
Tambah Karyawan
@endsection

@section('content')
<br>
	<form action="{{url('karyawan/add')}}" method="post">
		{{csrf_field()}}
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>NIP</label>
					<input class="form-control" name="nip" value="{{old('nip')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Nama Karyawan</label>
					<input class="form-control" name="nama" value="{{old('nama')}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat" required>{{old('alamat')}}</textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="{{old('email')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>No.Telp</label>
					<input type="number" class="form-control" name="no_telp" value="{{old('no_telp')}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" value="{{old('username')}}" required></input>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" value="{{old('password')}}" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Jabatan</label>
					<select class="form-control" name="kode_jabatan" required value="{{old('kode_jabatan')}}">
						@foreach($jab as $jj)
							<option value="{{$jj->kode_jabatan}}">{{$jj->nama_jabatan}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label>Status Perkawinan</label>
					<select class="form-control" name="status_perkawinan" required value="{{old('status_perkawinan')}}">
						<option value="1">Belum Kawin</option>
						<option value="2">Kawin</option>
					</select>
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