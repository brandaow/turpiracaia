<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'App') }}</title>
	
	<link rel="apple-touch-icon" sizes="76x76" href="http://localhost/piracaia/public/js/img/apple-icon.png">
	<link rel="icon" type="image/png" href="http://localhost/piracaia/public/js/img/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
	
	<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/sb-admin.min.css') }}" rel="stylesheet">
	
	@yield('header')
</head>

<body id="page-top">
	<div id="wrapper">
		<ul class="sidebar navbar-nav">
			<li class="nav-item @if(Route::getCurrentRoute()->getName() == 'admin.home') active @endif">
				<a class="nav-link" href="{{ route('admin.home') }}">
					<i class="fa fa-map-marker-alt"></i>
					<span>Atrativos</span>
				</a>
			</li>
			<li class="nav-item @if(Route::getCurrentRoute()->getName() == 'admin.ondeficar') active @endif">
				<a class="nav-link" href="{{ route('admin.ondeficar') }}">
					<i class="fa fa-bed"></i>
					<span>Onde Ficar</span>
				</a>
			</li>
			<li class="nav-item @if(Route::getCurrentRoute()->getName() == 'admin.ondecomer') active @endif">
				<a class="nav-link" href="{{ route('admin.ondecomer') }}">
					<i class="fa fa-utensils"></i>
					<span>Onde Comer</span>
				</a>
			</li>
			<li class="nav-item @if(Route::getCurrentRoute()->getName() == 'admin.news') active @endif">
				<a class="nav-link" href="{{ route('admin.news') }}">
					<i class="fa fa-newspaper"></i>
					<span>Notícias</span>
				</a>
			</li>
			<li class="nav-item @if(Route::getCurrentRoute()->getName() == 'admin.messages') active @endif">
				<a class="nav-link" href="{{ route('admin.messages') }}">
					<i class="fa fa-comment"></i>
					<span>Mensagens</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fa fa-sign-out-alt"></i>
					<span>Sair</span>
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
		</ul>
		<div id="content-wrapper">
			
				@yield('content')

			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>© TRP - {{ date('Y') }}.</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
	
	<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/bootstrap.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/sb-admin.min.js') }}" type="text/javascript"></script>
	@yield('js')
</body>

</html>


