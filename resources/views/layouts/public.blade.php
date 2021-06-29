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

<body class="landing-page sidebar-collapse">
	<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
		<div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="{{ config('app.url', 'http://localhost') }}">Turismo Rural em Piracaia</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto text-center">
					<li class="nav-item">
						<a href="{{ route('public.history') }}" class="nav-link">
							<i class="fa fa-city"></i> História
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('public.guides') }}" class="nav-link">
							<i class="material-icons">explore</i> Roteiros
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('public.attractives') }}">
							<i class="fa fa-map-marked-alt"></i> Atrativos
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('public.ondecomers') }}">
							<i class="fa fa-utensils"></i> Onde Comer
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('public.ondeficars') }}">
							<i class="fa fa-bed"></i> Onde Ficar
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ asset('docs/Catalogo.pdf') }}">
							<i class="fa fa-file-alt"></i> Catálogo
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('public.news') }}">
							<i class="fa fa-newspaper"></i> Notícias
						</a>
					</li>
					<span class="d-none d-lg-block">|</span>
					<li class="nav-item">
						<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://turismoruralpiracaia.blogspot.com/" target="_blank" data-original-title="Visite nosso Blogger">
							<i class="fab fa-blogger fa-2x"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/groups/366268214128686/?ref=group_header" target="_blank" data-original-title="Participe do nosso grupo">
							<i class="fab fa-facebook-square fa-2x"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('head')
	@yield('main')
	<footer class="footer footer-default">
		<div class="container">
			<nav class="float-left">
				<ul>
					<li><a href="https://turismoruralpiracaia.blogspot.com/">Blog</a></li>
					<li><a href="{{ route('public.contact') }}#contato">Contato</a></li>
					<li><a href="{{ route('admin.home') }}">Painel</a></li>
				</ul>
			</nav>
			<div class="copyright float-right">
				&copy; TRP - 
				<script>
					document.write(new Date().getFullYear())
				</script>. Desenvolvido por 
				<a href="https://pmmu.com.br">Equipe Técnica - PMMU</a>.
			</div>
		</div>
	</footer>
	<!--<div class="modal fade" id="equipe" tabindex="-1" role="dialog" aria-labelledby="equipeLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
        	<div class="modal-content">
          		<div class="modal-header">
            		<h5 class="modal-title" id="exampleModalLabel">Equipe Técnica</h5>
            		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              			<span aria-hidden="true">&times;</span>
            		</button>
          		</div>
          		<div class="modal-body">
            		<p><a href="mailto:marcus.rcm@outlook.com">Marcus Roberto</a> - Desenvolvedor</p>
            		<p><a href="mailto:biel.2brandao@gmail.com">Gabriel Brandão</a> - Desenvolvedor</p>
          		</div>
        	</div>
      	</div>
    </div>-->
	<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/plugins/moment.min.js') }}"></script>
	<script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="{{ asset('js/material-kit.min.js') }}" type="text/javascript"></script>
	@yield('js')
</body>
</html>