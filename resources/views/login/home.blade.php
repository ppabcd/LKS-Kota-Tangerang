@extends('template.home')

@section('title')
Login
@endsection
@section('content')
	<form action="{{url('/login')}}" method="post">
		{{csrf_field()}}
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="row">
				<div class="col-xs-1">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
			</div>
			
		</div>
	</form>
@endsection