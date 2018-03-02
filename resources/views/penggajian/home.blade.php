@extends('template.home')

@section('title')
Penggajian
@endsection

@section('content')
<div class="row">
		<button class="btn btn-primary" onclick="window.print()">Print Data</button>
</div>
<br>
<br>
	<div class="col-xs-6">
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label>No. Slip</label>
					<input type="text" name="no_slip" readonly required="" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label>Pilih Karyawan</label>
					<select class="form-control" id="karyawan">
						<option value="-"></option>
						@foreach($k as $s)
						<option value="{{$s->nip}}">{{$s->nama}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<p><b>Detail Karyawan</b></p>
				<div class="col-xs-6">
					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" id="kar_nama" readonly></input>
					</div>
					<div class="form-group">
						<label>NIP</label>
						<input class="form-control" id="kar_nip" readonly></input>
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input class="form-control" id="kar_jabatan" readonly></input>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label>Status</label>
						<input class="form-control" id="kar_status" readonly></input>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" id="kar_alamat" rows="5" readonly=""></textarea>
					</div>
				</div>
		</div>
		<div class="row">
			<p><b>Perhitungan Gaji</b></p>
				<div class="col-xs-6">
					<div class="form-group">
						<label>Gaji Pokok</label>
						<input class="form-control" id="kar_pokok" readonly></input>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label>Tunjangan Jabatan</label>
						<input class="form-control" id="kar_tunjangan" readonly></input>
					</div>
				</div>
		</div>
	</div>
	<div class="col-xs-6">
		<div class="potongan">
			<table class="table">
				<thead>
					<tr>
						<th>Potongan Untuk</th>
						<th>Kuantitas</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="" name="">
						</td>
						<td>
							<input type="" name="">
						</td>
						<td>
							<input type="" name="">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<div class="form-group">
			<label>Pendapatan</label>
			<input class="form-control" id="kar_pendapatan" readonly></input>
		</div>
		<div class="form-group">
			<label>Potongan</label>
			<input class="form-control" id="kar_potongan" readonly></input>
		</div>
		<div class="form-group">
			<label>Gaji Bersih</label>
			<input class="form-control" id="kar_potongan" readonly></input>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#karyawan").change(function(){

			});
		});
	</script>
@endsection