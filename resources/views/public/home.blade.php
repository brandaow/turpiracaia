@extends('layouts.public')

@section('head')

<div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190221_104357.jpg') }})">
	<div class="container">
		@if(session('alert'))
		<div class="alert alert-success rounded">
			<div class="container">
				<div class="alert-icon">
					<i class="material-icons">check</i>
				</div>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons">clear</i></span>
				</button>
				<b>{{ session('alert') }}</b>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Explore o melhor do turismo rural</h1>
				<h4 class="text-justify">Visite em Piracaia propriedades rurais e vivencie um contato mais próximo com a natureza, a agricultura local e as tradições do município.</h4>
				<br>
				<a href="{{ route('public.attractives') }}" class="btn btn-primary btn-raised btn-lg">
					<i class="fa fa-map-signs mr-2"></i> Explorar
				</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('main')
<div class="main main-raised">
	<div class="container">
		<div class="section text-center">
			<div class="features">
				<div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info">
								<i class="material-icons">navigation</i>
							</div>
							<h4 class="info-title">Conheça Novos Lugares</h4>
							<p>Explore todo o potencial turístico rural de Piracaia por meio de roteiros sugeridos ou mesmo visitando as propriedades individualmente.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">local_florist</i>
							</div>
							<h4 class="info-title">Curta a Natureza</h4>
							<p>Piracaia é o elo entre a natureza e você. Desfrute das inúmeras belezas que nossa cidade oferece.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger">
								<i class="material-icons">photo</i>
							</div>
							<h4 class="info-title">Crie Lembranças</h4>
							<p>Vivencie experiências únicas proporcionadas por cada propriedade rural e crie grandes lembranças de nossa cidade. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr id="roteiros">
		<h3 class="title text-center pt-4 pb-0 mb-0">Roteiros para Turismo</h3>
		<div class="section row d-flex justify-content-center">
			<ul class="nav nav-pills nav-pills-icons nav-pills-success d-flex justify-content-center" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" href="#opcoes" role="tab" data-toggle="tab">
						<i class="material-icons">dashboard</i> Roteiros
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#alternativo" role="tab" data-toggle="tab">
						<i class="fa fa-tractor"></i> Alternativo
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#agroecologico" role="tab" data-toggle="tab">
						<i class="fa fa-leaf"></i> Agroecológico
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#pecuaria" role="tab" data-toggle="tab">
						<i class="fa fa-horse"></i> Pecuária
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#gastronomia" role="tab" data-toggle="tab">
						<i class="fa fa-utensils"></i> Gastronomia
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#outros" role="tab" data-toggle="tab">
						<i class="fa fa-plus"></i> Outros
					</a>
				</li>
			</ul>
			<div class="tab-content tab-space mt-4 px-4">
				<div class="tab-pane active" id="opcoes">
					Siga um de nossos roteiros e conheça o melhor do turismo rural que Piracaia pode oferecer.
					<br>
					<br>Todos os roteiros tem como seu ponto inicial a Praça Nossa Sra. do Rosário.
					<br>
					<br><strong><u>É importe que se agende previamente cada propriedade, verificando sua disponibilidade para atendê-lo.</u></strong>
				</div>
				<div class="tab-pane text-left" id="alternativo">
					<div class="row p-auto m-auto">
						<div class="col-12">
							<span class="mx-2"><strong>Roteiro temático de novas alternativas rurais.</strong></span>
						</div>
						<div class="col-12">
							<br>
							<span class="mx-2"><strong>Locais de Visita:</strong></span>
							<ul>
								<a href="{{ route('public.attractive', 6) }}"><li>Sítio São Sebastião</li></a>
                                <a href="{{ route('public.attractive', 7) }}"><li>Família Orgânica</li></a>
                                <a href="{{ route('public.attractive', 8) }}"><li>Sabores da Terra</li></a>
                                <a href="{{ route('public.attractive', 9) }}"><li>Ecovila</li></a>
                                <a href="{{ route('public.attractive', 10) }}"><li>Aldeia Puri</li></a>
                                <a href="{{ route('public.attractive', 11) }}"><li>Rancho dos Ciganos</a>
							</ul>
						</div>
						<br>
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58749.07721108841!2d-46.35855610586235!3d-23.030478546827002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!4m4!2s23%C2%BA04.221&#39;%20s%2046%C2%BA21.470&#39;%20w!3m2!1d-23.070349999999998!2d-46.357833299999996!4m4!2s23%C2%BA04.218&#39;%20s%2046%C2%BA21.445&#39;%20w!3m2!1d-23.0703!2d-46.357416699999995!4m4!2s23%C2%BA00.254&#39;%20s%2046%C2%BA17.849&#39;%20w!3m2!1d-23.0042333!2d-46.297483299999996!4m4!2s23%C2%BA00.184&#39;%20s%2046%C2%BA17.927&#39;%20w!3m2!1d-23.003066699999998!2d-46.2987833!4m4!2s22%C2%BA59.990&#39;%20s%2046%C2%BA17.490&#39;%20w!3m2!1d-22.9998333!2d-46.2915!4m4!2s22%C2%BA59.770&#39;%20s%2046%C2%BA18.687&#39;%20w!3m2!1d-22.9961667!2d-46.31145!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574181020609!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tab-pane text-left" id="agroecologico">
					<div class="row p-auto m-auto">
						<div class="col-12">
							<span class="mx-2"><strong>Roteiro temático agroecológico.</strong></span>
						</div>
						<div class="col-12">
							<br>
							<span class="mx-2"><strong>Locais de Visita:</strong></span>
							<ul>
								<a href="{{ route('public.attractive', 7) }}"><li>Família Orgânica</li></a>
                                <a href="{{ route('public.attractive', 6) }}"><li>Sítio São Sebastião</li></a>
                                <a href="{{ route('public.attractive', 12) }}"><li>Sítio da Mata</li></a>
                                <a href="{{ route('public.attractive', 13) }}"><li>Quinta dos Tukanos</li></a>
							</ul>
						</div>
						<br>
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m48!1m12!1m3!1d58738.83365422107!2d-46.418228055749935!3d-23.053967793783883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m33!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA04.218&#39;%20s%2046%C2%BA21.445&#39;%20w!3m2!1d-23.0703!2d-46.357416699999995!4m4!2s23%C2%BA04.221&#39;%20s%2046%C2%BA21.470&#39;%20w!3m2!1d-23.070349999999998!2d-46.357833299999996!4m4!2s23%C2%BA02.302&#39;%20s%2046%C2%BA25.016&#39;%20w%20!3m2!1d-23.038366699999997!2d-46.4169333!4m4!2s23%C2%BA02.410&#39;%20s%2046%C2%BA24.406&#39;%20w%20!3m2!1d-23.0401667!2d-46.4067667!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574181069553!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tab-pane text-left" id="pecuaria">
					<div class="row p-auto m-auto">
						<div class="col-12">
							<span class="mx-2"><strong>Roteiro temático de pecuária e demais criações.</strong></span>
						</div>
						<div class="col-12">
							<br>
							<span class="mx-2"><strong>Locais de Visita:</strong></span>
							<ul>
								<a href="{{ route('public.attractive', 14) }}"><li>Sociedade Paulista de Trote</li></a>
                                <a href="{{ route('public.attractive', 35) }}"><li>Coelhos Santa Clara</li></a>
                                <a href="{{ route('public.attractive', 37) }}"><li>Fazenda Santa Rita</li></a>
                                <a href="{{ route('public.attractive', 38) }}"><li>Capril Santa Edwirges</li></a>
                                <a href="{{ route('public.attractive', 39) }}"><li>Dona Rita e Sr. Alziro</li></a>
                                <a href="{{ route('public.attractive', 40) }}"><li>Turma do Ovo</li></a>

							</ul>
						</div>
						<br>
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58739.21899242316!2d-46.43409595575418!3d-23.05308459389827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA05.677&#39;%20s%2046%C2%BA26.427&#39;%20w!3m2!1d-23.0946167!2d-46.44045!4m4!2zMjPCujAzJzI5LjgiIHMgNDbCujIyJzQ4LjAiIHcg!3m2!1d-23.0582778!2d-46.379999999999995!4m4!2zMjPCsDAyJzA0LjYiIHMgNDbCsDIzJzEwLjYiIHcg!3m2!1d-23.0346111!2d-46.386277799999995!4m4!2zMjPCsDAxJzE5LjEiIHMgNDbCsDIyJzI1LjgiIHcg!3m2!1d-23.0219722!2d-46.3738333!4m4!2s23%C2%BA01.848&#39;%20s%2046%C2%BA21.792&#39;%20w!3m2!1d-23.0308!2d-46.3632!4m4!2s23%C2%BA00.655&#39;%20s%2046%C2%BA23.996&#39;%20w%20!3m2!1d-23.0109167!2d-46.3999333!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574181140377!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tab-pane text-left" id="gastronomia">
					<div class="row p-auto m-auto">
						<div class="col-12">
							<span class="mx-2"><strong>Roteiro temático de artes e gastronomia.</strong></span>
						</div>
						<div class="col-12">
							<br>
							<span class="mx-2"><strong>Locais de Visita:</strong></span>
							<ul>
								<a href="{{ route('public.attractive', 41) }}"><li>Sítio Pau Véio</li></a>
    							<a href="{{ route('public.attractive', 8) }}"><li>Sabores da Terra</li></a>
    							<a href="{{ route('public.attractive', 42) }}"><li>Galeria de Artes Brasiliana</li></a>
    							<a href="{{ route('public.attractive', 43) }}"><li>Restaurante do Rentato</li></a>
    							<a href="{{ route('public.attractive', 44) }}"><li>Café com Costura</li></a>
    							<a href="{{ route('public.attractive', 45) }}"><li>Kaus Von Secca</li></a>
    							<a href="{{ route('public.attractive', 46) }}"><li>Ateliê Romilda Dias</li></a>
							</ul>
						</div>
						<br>
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d117487.70024731231!2d-46.43314873622876!3d-23.042467480526792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s22%C2%BA59.978&#39;%20s%2046%C2%BA17.524&#39;%20w!3m2!1d-22.9996333!2d-46.2920667!4m4!2s23%C2%BA00.254&#39;%20s%2046%C2%BA17.849&#39;%20w%20!3m2!1d-23.0042333!2d-46.297483299999996!4m4!2zMjPCsDAzJzA3LjAiIHMgNDbCsDIxJzE3LjQiIHcg!3m2!1d-23.0519444!2d-46.354833299999996!4m4!2zMjPCsDAxJzU4LjgiIHMgNDbCsDIxJzM5LjkiIHcg!3m2!1d-23.032999999999998!2d-46.3610833!4m4!2s23%C2%BA04.160&#39;%20s%2046%C2%BA23.988&#39;%20w%20!3m2!1d-23.0693333!2d-46.3998!4m4!2s23%C2%BA05.659&#39;%20s%2046%C2%BA26.230&#39;%20w%20!3m2!1d-23.0943167!2d-46.4371667!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574181177131!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tab-pane text-left" id="outros">
					<div class="row p-auto m-auto">
						<div class="col-12">
							<span class="mx-3"><strong>Explore com mais detalhes todos os roteiros temáticos e também rotas geográficas através do botão abaixo.</strong></span>
						</div>
					</div>
				</div>
				<a href="{{ route('public.guides') }}" class="btn btn-outline-success btn-block mt-4"><i class="fa fa-info-circle px-1"></i> Mais informações</a>
			</div>
		</div>
		<hr id="realizacao">
		<h3 class="title text-center pt-4 pb-0 mb-0">Realização</h3>
		<div class="row justify-content-center mt-4 mb-4">
			<div class="col-md-2 col-sx-4 pb-3 pt-3 mb-5 mb-lg-0 text-center">
				<img class="img-fluid rounded-circle mb-3" src="{{ asset('img/logoCANDIDA2.png') }}" alt="Cândida Baptista">
				Cândida Baptista
			</div>
			<div class="col-1"></div>
			<div class="col-md-2 col-sx-4 pb-3 pt-3 mb-5 mb-lg-0 text-center">
				<img class="img-fluid rounded-circle mb-3" src="{{ asset('img/logoJANA.jpeg') }}" alt="Jana Carvalho">
				Jana Carvalho
			</div>
			<div class="col-1"></div>
			<div class="col-md-2 col-sx-4 pb-3 pt-3 mb-5 mb-lg-0 text-center">
				<img class="img-fluid rounded-circle mb-3" src="{{ asset('img/logoUSF.jpg') }}" alt="USF">
				Universidade São Francisco
			</div>
			<div class="col-1"></div>
			<div class="col-md-2 col-sx-4 pb-3 pt-3 mb-5 mb-lg-0 text-center">
				<img class="img-fluid rounded-circle mb-3" src="{{ asset('img/logoPIRACAIA.png') }}" alt="Prefeitura de Piracaia">
				Prefeitura de Piracaia
			</div>
		</div>
		<hr id="contato">
		<div class="section section-contacts">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="text-center title">Fale Conosco</h2>
					<h4 class="text-center description">Entre em contato com a equipe responsável, deixe uma mensagem, sugestão ou crítica por meio do formulário abaixo. Caso necessário, responderemos em seu email.</h4>
					<form class="contact-form" role="form" method="POST" action="{{ route('public.contact') }}">
						{!! csrf_field() !!}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Nome</label>
									<input type="text" name="name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Email</label>
									<input type="email" name="email" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="contactMessage" class="bmd-label-floating">Mensagem</label>
							<textarea type="text" name="message" id="contactMessage" class="form-control" rows="4"></textarea>
						</div>
						<div class="row">
							<div class="col-md-4 ml-auto mr-auto text-center">
								<button type="submit" class="btn btn-primary btn-raised">
									Enviar Mensagem
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection