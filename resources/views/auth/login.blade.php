<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'App') }}</title>
	
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
	
	<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/material-kit.min.css') }}" rel="stylesheet">
</head>

<body class="login-page sidebar-collapse">
	<div class="page-header header-filter" style="background-image: url('https://i2.wp.com/www.jardimdomundo.com/wp-content/uploads/2017/06/1-5.jpg?fit=2816%2C2112&ssl=1'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ml-auto mr-auto">
					<div class="card card-login">
						<form class="form" method="POST" action="{{ route('login') }}">
							@csrf
							<div class="card-header card-header-success text-center">
								<h4 class="card-title">Login</h4>
								<p class="description text-center text-white">Painel Administrativo</p>
							</div>
							<div class="card-body">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">mail</i>
										</span>
									</div>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">
									@error('email')
									<span class="invalid-feedback ml-4" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">lock_outline</i>
										</span>
									</div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha...">
									@error('password')
									<span class="invalid-feedback ml-4" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Entrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer footer-default">
		<div class="container">
			<nav class="float-left">
				<ul>
					<li><a href="{{ route('public.home') }}">Voltar</a></li>
				</ul>
			</nav>
			<div class="copyright float-right">
				&copy; TRP - 
				<script>
					document.write(new Date().getFullYear())
				</script>. 
				<!--<a href="https://www.creative-tim.com" target="_blank">Marcus Roberto</a> e <a href="https://www.creative-tim.com" target="_blank">Gabriel Brandão</a>.-->
			</div>
		</div>
	</footer>
	<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/plugins/moment.min.js') }}"></script>
	<script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material-kit.min.js') }}" type="text/javascript"></script>
</body>
</html>
