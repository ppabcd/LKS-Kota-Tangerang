<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Penggajian | @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-11">
					<a href="{{url('')}}" class="logo">Aplikasi Penggajian</a>
				</div>
				<div class="col-xs-1">
					<button class="btn btn-toggle">=</button>
				</div>
			</div>
		</div>
	</header>
	<nav class="left">
		<div class="item">
			<div class="header-item">User Management</div>
			<a class="item" href="{{url('login')}}">Login</a>
			<a class="item" href="{{url('logout')}}">Logout</a>
		</div>
		<div class="item">
			<div class="header-item">Navigation</div>
			<a class="item" href="{{url('logout')}}">Dashboard</a>
			<a class="item" href="{{url('jabatan')}}">Jabatan</a>
			<a class="item" href="{{url('karyawan')}}">Karyawan</a>
			<a class="item" href="{{url('potongan')}}">Potongan</a>
			<a class="item" href="{{url('penggajian')}}">Penggajian</a>
		</div>
	</nav>
	<div class="content">
		<div class="content-data">
			<h1>@yield('title')</h1>
			@if(session('error'))
				<div class="alert alert-danger">{{session('error')}}</div>
			@endif
			@if(session('success'))
				<div class="alert alert-success">{{session('success')}}</div>
			@endif
			@yield('content')
		</div>
	</div>
	<script type="text/javascript">
		document.querySelector('.btn-toggle').addEventListener("click",function(){
			document.querySelector('nav').classList.toggle('visible');
		});
	</script>
	@yield('script')
</body>
</html>