@extends('layouts.public')

@section('head')
<div class="page-headers page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190307_110120.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Roteiros</h1>
			</div>
		</div>
	</div>
</div>
@endsection

@section('main')
<div class="main main-raised">
	<div class="section py-3">
		
		<div class="container">
			<p class="mt-2">Explore algumas sugestões de rotas com diversos locais para visitação estratégicamente selecionados.</p>
			<p><strong><u>É importe que se agende previamente cada propriedade, verificando sua disponibilidade para atendê-lo.</u></strong></p>
			<hr>
			<p class="title display-4">Roteiros Temáticos:</p>
			<hr>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-directions fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Novas Alternativas Rurais</p>
					<hr class="my-1">
					<p>
						Nesse Roteiro é possível conhecer histórias e novas práticas, aplicadas nas  áreas de  cultivo, criação de animais, construção e alimentação, com foco no consumo consciente e na qualidade de vida.
					</p>
					<a data-toggle="modal" data-target="#alternativas" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/mFUktvmW5tcuXQz87" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="{{ asset('docs/rot_alternativas.pdf') }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-leaf fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Agroecológico</p>
					<hr class="my-1">
					<p>
						Nesse roteiro é possível conhecer e participar de atividades diretamente ligadas a terra. As propriedades tem  características e objetivos bem diferentes porém , seguem as práticas de uma  agricultura sustentável.
					</p>
					<a data-toggle="modal" data-target="#agroecologico" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/Q8UXPBpBW5ATBx5g6" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="{{ asset('docs/rot_agroecologico.pdf') }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-horse fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Pecuária e Demais Criações</p>
					<hr class="my-1">
					<p>
						Eis um bela oportunidade de conhecer diversos animais existentes na região e aprender sobre seus hábitos alimentares,  cuidados e atividades relacionadas a cada um deles.
					</p>
					<a data-toggle="modal" data-target="#pecuaria" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/t7CKh3GRZ16w1xrKA" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-utensils fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Artes e Gastronomia</p>
					<hr class="my-1">
					<p>
						Nesse roteiro multi sensorial, o convite a percepção da natureza e das obras, inspiram o visitante a ampliarem o campo de visão através das artes. A oportunidade de participar de uma oficina para desenvolver novas habilidades criativas através  da costura, pode ser uma experiência surpreendente.
					</p>
					<a data-toggle="modal" data-target="#artes" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/thBfZLCVoKPhiu9w5" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<hr>
			<p class="title display-4">Roteiros Geográficos:</p>
			<hr>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-road fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Pião e Arredores</p>
					<hr class="my-1">
					<p>
						No trajeto do centro até o pacato bairro rural do Pião, pode-se ver as águas da Represa Cachoeira, as montanhas e a mata atlântica remanescente.
						Degustar a gastronomia rural, caminhar pelas propriedades entendendo quais são as atividades desenvolvidas e ter a chance de tomar um banho refrescante nas águas do Rio Atibainha tornam esse roteiro muito especial.
					</p>
					<a data-toggle="modal" data-target="#piao" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/WGxjuua7aYRNeNrv7" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-truck-pickup fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Off Road - Contorno a Represa Cachoeira</p>
					<hr class="my-1">
					<p>
						Contornar a Represa Cachoeira é uma uma maneira  de ter um contato com a bela paisagem rural e com as as águas que abastecem a grande São Paulo, que compõe o Sistema Cantareira.  Degustar a gastronomia rural ,caminhar pelas propriedades entendendo quais são as atividades desenvolvidas e ter a chance de tomar um banho de nascente podem tornar esse dia especial.
					</p>
					<a data-toggle="modal" data-target="#offroad" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/vxPU2ymFy98DPek19" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-directions fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Cravorana, Barrocão e Dandão</p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#cravorana" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/CPKaYe3qp391mjfQA" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-tree fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Adão Silva, Taboão, Panorama e Cravorana</p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#adao" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/WaGp8k1e5njdY2nj7" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-map-signs fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Ribeirão e Pinhal</p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#ribeirao" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/w37Ef1DPHbSJBkgz9" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-road fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Boa vista e Dobrada</p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#boa" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/JmndGFouShhLgVFV8" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded bg-light pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-directions fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Canedos, Baldins e Guaxinduva </p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#canedos" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/Hga2AQsAvdrS32PBA" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
			<div class="row align-items-center rounded pb-3 mx-1 mb-2">
				<div class="col-md-2 text-center d-none d-lg-block">
					<i class="fa fa-map-marker-alt fa-4x"></i>
				</div>
				<div class="col-md-10">
					<p class="title lead mb-0"><i class="fa fa-circle mx-1"></i> Batatuba/Cachoeira Abaixo</p>
					<hr class="my-1">
					<p>
						Eis a oportunidade de conhecer e interagir com o espaço rural e com o produtor, percebendo como é a rotina de vida de quem mora no interior, além de se poder provar e adquirir produtos típicos, frescos e direto do produtor.
					</p>
					<a data-toggle="modal" data-target="#batatuba" class="btn btn-dark btn-raised btn-fab btn-round text-white" target="_blank" rel="noopener noreferrer"><i class="fa fa-info"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="https://goo.gl/maps/Jmv9sue5e2Tysr4Z6" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>
					<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-save"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="alternativas" tabindex="-1" role="dialog" aria-labelledby="alternativas" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Novas Alternativas Rurais</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 6) }}"><li>Sítio São Sebastião</li></a>
							<a href="{{ route('public.attractive', 7) }}"><li>Família Orgânica</li></a>
							<a href="{{ route('public.attractive', 8) }}"><li>Sabores da Terra</li></a>
							<a href="{{ route('public.attractive', 9) }}"><li>Ecovila</li></a>
							<a href="{{ route('public.attractive', 10) }}"><li>Aldeia Puri</li></a>
							<a href="{{ route('public.attractive', 11) }}"><li>Rancho dos Ciganos</a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsAlternativas" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/1911144100GNpfN2.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/1911160840yjOb32.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/1911163606BAoF82.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/21111237547KY4R2.jpg') }}" alt="">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselControlsAlternativas" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsAlternativas" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58749.07721108841!2d-46.35855610586235!3d-23.030478546827002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!4m4!2s23%C2%BA04.221&#39;%20s%2046%C2%BA21.470&#39;%20w!3m2!1d-23.070349999999998!2d-46.357833299999996!4m4!2s23%C2%BA04.218&#39;%20s%2046%C2%BA21.445&#39;%20w!3m2!1d-23.0703!2d-46.357416699999995!4m4!2s23%C2%BA00.254&#39;%20s%2046%C2%BA17.849&#39;%20w!3m2!1d-23.0042333!2d-46.297483299999996!4m4!2s23%C2%BA00.184&#39;%20s%2046%C2%BA17.927&#39;%20w!3m2!1d-23.003066699999998!2d-46.2987833!4m4!2s22%C2%BA59.990&#39;%20s%2046%C2%BA17.490&#39;%20w!3m2!1d-22.9998333!2d-46.2915!4m4!2s22%C2%BA59.770&#39;%20s%2046%C2%BA18.687&#39;%20w!3m2!1d-22.9961667!2d-46.31145!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574174969391!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="{{ asset('docs/rot_alternativas.pdf') }}" class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="agroecologico" tabindex="-1" role="dialog" aria-labelledby="agroecologico" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Agroecológico</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 7) }}"><li>Família Orgânica</li></a>
							<a href="{{ route('public.attractive', 6) }}"><li>Sítio São Sebastião</li></a>
							<a href="{{ route('public.attractive', 12) }}"><li>Sítio da Mata</li></a>
							<a href="{{ route('public.attractive', 13) }}"><li>Quinta dos Tukanos</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsAgro" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/1911160840yjOb32.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/1911144100GNpfN2.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/2111125850woHHa2.jpg') }}" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="{{ asset('uploads/2111140727R2ruh2.jpg') }}" alt="">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselControlsAgro" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsAgro" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m48!1m12!1m3!1d29369.41682711225!2d-46.38075866061217!3d-23.05396779377602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m33!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA04.218&#39;%20s%2046%C2%BA21.445&#39;%20w!3m2!1d-23.0703!2d-46.357416699999995!4m4!2s23%C2%BA04.221&#39;%20s%2046%C2%BA21.470&#39;%20w!3m2!1d-23.070349999999998!2d-46.357833299999996!4m4!2s23%C2%BA02.302&#39;%20s%2046%C2%BA25.016&#39;%20w%20!3m2!1d-23.038366699999997!2d-46.4169333!4m4!2s23%C2%BA02.410&#39;%20s%2046%C2%BA24.406&#39;%20w%20!3m2!1d-23.0401667!2d-46.4067667!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574175190486!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="{{ asset('docs/rot_agroecologico.pdf') }}" class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pecuaria" tabindex="-1" role="dialog" aria-labelledby="pecuaria" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Pecuária e Demais Criações</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 14) }}"><li>Sociedade Paulista de Trote</li></a>
							<a href="{{ route('public.attractive', 35) }}"><li>Coelhos Santa Clara</li></a>
							<a href="{{ route('public.attractive', 37) }}"><li>Fazenda Santa Rita</li></a>
							<a href="{{ route('public.attractive', 38) }}"><li>Capril Santa Edwirges</li></a>
							<a href="{{ route('public.attractive', 39) }}"><li>Dona Rita e Sr. Alziro</li></a>
							<a href="{{ route('public.attractive', 40) }}"><li>Turma do Ovo</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsPecuaria" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsPecuaria" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsPecuaria" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d117478.43798493371!2d-46.391180611583216!3d-23.053084593798093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA05.677&#39;%20s%2046%C2%BA26.427&#39;%20w!3m2!1d-23.0946167!2d-46.44045!4m4!2zMjPCujAzJzI5LjgiIHMgNDbCujIyJzQ4LjAiIHcg!3m2!1d-23.0582778!2d-46.379999999999995!4m4!2zMjPCsDAyJzA0LjYiIHMgNDbCsDIzJzEwLjYiIHcg!3m2!1d-23.0346111!2d-46.386277799999995!4m4!2zMjPCsDAxJzE5LjEiIHMgNDbCsDIyJzI1LjgiIHcg!3m2!1d-23.0219722!2d-46.3738333!4m4!2s23%C2%BA01.848&#39;%20s%2046%C2%BA21.792&#39;%20w!3m2!1d-23.0308!2d-46.3632!4m4!2s23%C2%BA00.655&#39;%20s%2046%C2%BA23.996&#39;%20w%20!3m2!1d-23.0109167!2d-46.3999333!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574175316568!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="artes" tabindex="-1" role="dialog" aria-labelledby="artes" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Artes e Gastronomia</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
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
					<div class="col-md-7">
						<div id="carouselControlsArtes" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsArtes" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsArtes" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d117487.70024731166!2d-46.34731804775131!3d-23.04246748052754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s22%C2%BA59.978&#39;%20s%2046%C2%BA17.524&#39;%20w!3m2!1d-22.9996333!2d-46.2920667!4m4!2s23%C2%BA00.254&#39;%20s%2046%C2%BA17.849&#39;%20w%20!3m2!1d-23.0042333!2d-46.297483299999996!4m4!2zMjPCsDAzJzA3LjAiIHMgNDbCsDIxJzE3LjQiIHcg!3m2!1d-23.0519444!2d-46.354833299999996!4m4!2zMjPCsDAxJzU4LjgiIHMgNDbCsDIxJzM5LjkiIHcg!3m2!1d-23.032999999999998!2d-46.3610833!4m4!2s23%C2%BA04.160&#39;%20s%2046%C2%BA23.988&#39;%20w%20!3m2!1d-23.0693333!2d-46.3998!4m4!2s23%C2%BA05.659&#39;%20s%2046%C2%BA26.230&#39;%20w%20!3m2!1d-23.0943167!2d-46.4371667!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574175499318!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="piao" tabindex="-1" role="dialog" aria-labelledby="piao" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Pião e Arredores</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 52) }}"><li>Fazenda Vargem do Lírio</li></a>
							<a href="{{ route('public.attractive', 51) }}"><li>Selaria do Noel Machado</li></a>
							<a href="{{ route('public.attractive', 48) }}"><li>Padaria do Carlão</li></a>
							<a href="{{ route('public.attractive', 47) }}"><li>Fazenda Passarada</li></a>
							<a href="{{ route('public.attractive', 49) }}"><li>Chácara dos Andradas</li></a>
							<a href="{{ route('public.attractive', 50) }}"><li>Pousada Canto do Lago</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsPiao" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsPiao" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsPiao" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m63!1m12!1m3!1d117419.67567495549!2d-46.31862459664682!3d-23.12033505622698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m48!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA04.972&#39;%20s%2046%C2%BA12.991&#39;%20w%20!3m2!1d-23.0828667!2d-46.2165167!4m4!2s23%C2%BA05.802&#39;%20s%2046%C2%BA14.184&#39;%20w%20!3m2!1d-23.0967!2d-46.236399999999996!4m4!2s23%C2%BA05.856&#39;%20s%2046%C2%BA14.166&#39;%20w%20!3m2!1d-23.0976!2d-46.2361!4m4!2s23%C2%BA05.762&#39;%20s%2046%C2%BA14.167&#39;%20w%20!3m2!1d-23.0960333!2d-46.2361167!4m4!2s23%C2%BA04.926&#39;%20s%2046%C2%BA14.937&#39;%20w!3m2!1d-23.0821!2d-46.24895!4m4!2s23%C2%BA06.283&#39;%20s%2046%C2%BA16.561&#39;%20w!3m2!1d-23.104716699999997!2d-46.2760167!4m4!2s23%C2%BA04.271&#39;%20s%2046%C2%BA18.371&#39;%20w%20!3m2!1d-23.071183299999998!2d-46.3061833!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574175983686!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="offroad" tabindex="-1" role="dialog" aria-labelledby="offroad" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Off Road - Contorno a Represa Cachoeira</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 53) }}"><li>Café Mandala</li></a>
							<a href="{{ route('public.attractive', 54) }}"><li>Sítio do Mais Velho</li></a>
							<a href="{{ route('public.attractive', 55) }}"><li>Sítio do Pascoal</li></a>
							<a href="{{ route('public.attractive', 56) }}"><li>Bar do Marciano</li></a>
							<a href="{{ route('public.attractive', 54) }}"><li>Represa Cachoeira</li></a>
							<a href="{{ route('public.attractive', 50) }}"><li>Pousada Canto do Lago</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsOff" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsOff" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsOff" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m48!1m12!1m3!1d58744.98544861375!2d-46.27861064778382!3d-23.039863981991342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m33!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA01.927&#39;%20s%2046%C2%BA17.994&#39;%20w!3m2!1d-23.0321167!2d-46.2999!4m4!2s23%C2%BA01.737&#39;%20s%2046%C2%BA13.979&#39;%20w%20!3m2!1d-23.02895!2d-46.2329833!4m4!2s23%C2%BA01.702&#39;%20s%2046%C2%BA15.789&#39;%20w!3m2!1d-23.0283667!2d-46.263149999999996!4m4!2s23%C2%BA04.271&#39;%20s%2046%C2%BA18.371&#39;%20w!3m2!1d-23.071183299999998!2d-46.3061833!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176155619!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="cravorana" tabindex="-1" role="dialog" aria-labelledby="cravorana" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Cravorana, Barrocão e Dandão</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 57) }}"><li>Quiosque Santa Rosa</li></a>
							<a href="{{ route('public.attractive', 54) }}"><li>Sítio Pau Véio</li></a>
							<a href="{{ route('public.attractive', 8) }}"><li>Sabores da Terra</li></a>
							<a href="{{ route('public.attractive', 9) }}"><li>Ecovila</li></a>
							<a href="{{ route('public.attractive', 58) }}"><li>Vale dos Contos</li></a>
							<a href="{{ route('public.attractive', 10) }}"><li>Sítio Aldeia Puri</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsCravorana" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsCravorana" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsCravorana" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58752.178496395994!2d-46.358228605896116!3d-23.023362597749305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s22%C2%BA59.770&#39;%20s%2046%C2%BA18.687&#39;%20w!3m2!1d-22.9961667!2d-46.31145!4m4!2s22%C2%BA59.978&#39;%20s%2046%C2%BA17.524&#39;%20w%20!3m2!1d-22.9996333!2d-46.2920667!4m4!2s23%C2%BA00.254&#39;%20s%2046%C2%BA17.849&#39;%20w!3m2!1d-23.0042333!2d-46.297483299999996!4m4!2s23%C2%BA00.161&#39;%20s%2046%C2%BA17.734&#39;%20w!3m2!1d-23.002683299999998!2d-46.295566699999995!4m4!2s23%C2%BA00.194&#39;%20s%2046%C2%BA17.463&#39;%20w!3m2!1d-23.003233299999998!2d-46.29105!4m4!2s22%C2%BA59.990&#39;%20s%2046%C2%BA17.490&#39;%20w!3m2!1d-22.9998333!2d-46.2915!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176315092!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="adao" tabindex="-1" role="dialog" aria-labelledby="adao" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Adão Silva, Taboão, Panorama e Cravorana</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 59) }}"><li>Sítio Nossa Senhora da Aparecida</li></a>
							<a href="{{ route('public.attractive', 60) }}"><li>Parreiral</li></a>
							<a href="{{ route('public.attractive', 61) }}"><li>Kombi da Joelma</li></a>
							<a href="{{ route('public.attractive', 62) }}"><li>Rancho Panorama Bar</li></a>
							<a href="{{ route('public.attractive', 63) }}"><li>Sítio Cheiro de Mato</li></a>
							<a href="{{ route('public.attractive', 64) }}"><li>Cachaçaria do Lafaiete</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsAdao" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsAdao" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsAdao" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58753.60228371618!2d-46.33769916167375!3d-23.020094998173064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s22%C2%BA59.131&#39;%20s%2046%C2%BA21.205&#39;%20w!3m2!1d-22.985516699999998!2d-46.3534167!4m4!2s22%C2%BA59.056&#39;%20s%2046%C2%BA20.901&#39;%20w%20!3m2!1d-22.9842667!2d-46.348349999999996!4m4!2s22%C2%BA59.919&#39;%20s%2046%C2%BA20.399&#39;%20w%20!3m2!1d-22.998649999999998!2d-46.3399833!4m4!2zMjLCsDU5JzU2LjEiIHMgNDbCsDIwJzIzLjYiIHcg!3m2!1d-22.9989167!2d-46.3398889!4m4!2s23%C2%BA00.702&#39;%20s%2046%C2%BA20.378&#39;%20w!3m2!1d-23.011699999999998!2d-46.339633299999996!4m4!2zMjPCsDAyJzM4LjAiIHMgNDbCsDIwJzE3LjgiIHcg!3m2!1d-23.0438889!2d-46.3382778!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176398379!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ribeirao" tabindex="-1" role="dialog" aria-labelledby="ribeirao" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Ribeirão e Pinhal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 37) }}"><li>Fazenda Santa Rita</li></a>
							<a href="{{ route('public.attractive', 65) }}"><li>Cachaçaria Vieira</li></a>
							<a href="{{ route('public.attractive', 66) }}"><li>Rancho Itamura</li></a>
							<a href="{{ route('public.attractive', 67) }}"><li>Hotel Pousada Paraiso do Sonho</li></a>
							<a href="{{ route('public.attractive', 40) }}"><li>Turma do Ovo</li></a>
							<a href="{{ route('public.attractive', 68) }}"><li>Sr. Cogumelo</li></a>
							<a href="{{ route('public.attractive', 69) }}"><li>Alambique Choro de Cana</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsRibeirao" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsRibeirao" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsRibeirao" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m63!1m12!1m3!1d29373.897717321506!2d-46.38231351162166!3d-23.033418996396914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m48!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2zMjPCsDAyJzA0LjYiIHMgNDbCsDIzJzEwLjYiIHc!3m2!1d-23.0346111!2d-46.386277799999995!4m4!2s23%C2%BA01.219&#39;%20s%2046%C2%BA23.949&#39;%20w%20!3m2!1d-23.0203167!2d-46.39915!4m4!2s23%C2%BA01.097&#39;%20s%2046%C2%BA23.891&#39;%20w%20!3m2!1d-23.0182833!2d-46.3981833!4m4!2zMjPCsDAwJzQzLjEiIHMgNDbCsDI0JzAzLjAiIHc!3m2!1d-23.0119722!2d-46.400833299999995!4m4!2s23%C2%BA00.655&#39;%20s%2046%C2%BA23.996&#39;%20w%20!3m2!1d-23.0109167!2d-46.3999333!4m4!2zMjPCsDAzJzIxLjQiIFMgNDbCsDIzJzMyLjAiIFc!3m2!1d-23.055944399999998!2d-46.3922222!4m4!2s23%C2%BA03.007&#39;%20s%2046%C2%BA22.446&#39;%20w%20!3m2!1d-23.0501167!2d-46.3741!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176510880!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="boa" tabindex="-1" role="dialog" aria-labelledby="boa" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Boa Vista e Dobrada</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 39) }}"><li>Propriedade da Dona Dita e Sr. Alziro</li></a>
							<a href="{{ route('public.attractive', 70) }}"><li>Queijo Primavera</li></a>
							<a href="{{ route('public.attractive', 38) }}"><li>Capril Santa Edwirges</li></a>
							<a href="{{ route('public.attractive', 43) }}"><li>Restaurante do Renato</li></a>
							<a href="{{ route('public.attractive', 71) }}"><li>Chácara das Laranjeiras</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsBoa" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsBoa" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsBoa" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m54!1m12!1m3!1d58750.2753750605!2d-46.38383761907611!3d-23.02772958677717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m39!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA01.848&#39;%20s%2046%C2%BA21.792&#39;%20w%20!3m2!1d-23.0308!2d-46.3632!4m4!2s23%C2%BA00.054&#39;%20s%2046%C2%BA21.403&#39;%20w!3m2!1d-23.000899999999998!2d-46.3567167!4m4!2zMjPCsDAxJzE5LjEiIHMgNDbCsDIyJzI1LjgiIHc!3m2!1d-23.0219722!2d-46.3738333!4m4!2zMjPCsDAxJzU4LjgiIHMgNDbCsDIxJzM5LjkiIHcg!3m2!1d-23.032999999999998!2d-46.3610833!4m5!1s0x94cea35216dce28f%3A0x84d439b9e4b2110e!2sPousada%20Colina%20Boa%20Vista%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0431609!2d-46.35867!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176594962!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="canedos" tabindex="-1" role="dialog" aria-labelledby="canedos" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Canedos, Baldins e Guaxinduva</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 14) }}"><li>Sociedade Paulista de Trote</li></a>
							<a href="{{ route('public.attractive', 72) }}"><li>Rancho JR</li></a>
							<a href="{{ route('public.attractive', 73) }}"><li>Sítio Takayama</li></a>
							<a href="{{ route('public.attractive', 74) }}"><li>Bar da Eliana</li></a>
							<a href="{{ route('public.attractive', 75) }}"><li>Flores Yoshikawa</li></a>
							<a href="{{ route('public.attractive', 76) }}"><li>Flores Takayama</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsCanedos" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsCanedos" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsCanedos" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d58725.84759987648!2d-46.390916746956!3d-23.08371330922171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA05.677&#39;%20s%2046%C2%BA26.427&#39;%20w%20!3m2!1d-23.0946167!2d-46.44045!4m4!2s23%C2%BA06.854&#39;%20s%2046%C2%BA25.623&#39;%20w!3m2!1d-23.1142333!2d-46.42705!4m4!2s23%C2%BA06.550&#39;%20s%2046%C2%BA25.506&#39;%20w!3m2!1d-23.1091667!2d-46.4251!4m4!2zMjPCsDA2JzMzLjEiIHMgNDbCsDI1JzA4LjgiIHcg!3m2!1d-23.1091944!2d-46.419111099999995!4m4!2s23%C2%BA06.372&#39;%20s%2046%C2%BA27.136&#39;%20w!3m2!1d-23.106199999999998!2d-46.452266699999996!4m4!2zMjPCsDA2JzIxLjkiIHMgIDQ2wrAyNycxMS43IiB3IA!3m2!1d-23.106083299999998!2d-46.45325!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176710789!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="batatuba" tabindex="-1" role="dialog" aria-labelledby="batatuba" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">Batatuba/Cachoeira Abaixo</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="body">
				<div class="row align-items-center">
					<div class="col-md-5">
						<p><strong>Locais de Visita:</strong></p>
						<ul>
							<a href="{{ route('public.attractive', 77) }}"><li>Quintal do Espanhol e da Cida</li></a>
							<a href="{{ route('public.attractive', 78) }}"><li>Roça do Bigode</li></a>
							<a href="{{ route('public.attractive', 35) }}"><li>Coelhário Santa Clara</li></a>
							<a href="{{ route('public.attractive', 79) }}"><li>Pizzaria Cine Rancho</li></a>
							<a href="{{ route('public.attractive', 13) }}"><li>Quinta dos Tukanos</li></a>
							<a href="{{ route('public.attractive', 80) }}"><li>Cachaçaria Artesanal do Sr. Francisco</li></a>
						</ul>
					</div>
					<div class="col-md-7">
						<div id="carouselControlsBatatuba" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!--<div class="carousel-item active">
									<img class="rounded d-block w-100" height="200" src="http://www.centrodeestudos.org/wp-content/uploads/2016/06/natureza-200x200.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-100" height="200" src="https://store-images.s-microsoft.com/image/apps.21449.13510798886705778.52b15b6d-1831-4dd2-a4ee-f7def0b276f2.4a4438e8-16b1-49bf-b963-3bfe3ae01d24?mode=scale&q=90&h=200&w=200&background=%230078D7" alt="">
								</div>-->
							</div>
							<a class="carousel-control-prev" href="#carouselControlsBatatuba" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControlsBatatuba" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d29367.103806164014!2d-46.38040976156772!3d-23.06456824245163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x94cea3360ab921f5%3A0x206b8eaa7cdf9b9e!2sPra%C3%A7a%20Nossa%20Sra.%20do%20Ros%C3%A1rio%20-%20Centro%2C%20Piracaia%20-%20SP%2C%2012970-000!3m2!1d-23.0541461!2d-46.357258699999996!4m4!2s23%C2%BA05.336&#39;%20s%2046%C2%BA24.749&#39;%20w!3m2!1d-23.088933299999997!2d-46.4124833!4m4!2s23%C2%BA05.233&#39;%20s%2046%C2%BA25.018&#39;%20w%20!3m2!1d-23.0872167!2d-46.416966699999996!4m4!2zMjPCujAzJzI5LjgiIHMgNDbCujIyJzQ4LjAiIHcg!3m2!1d-23.0582778!2d-46.379999999999995!4m4!2zMjPCsDAyJzQzLjUiIHMgNDbCsDI0JzIxLjEiIHcg!3m2!1d-23.0454167!2d-46.405861099999996!4m4!2s23%C2%BA02.410&#39;%20s%2046%C2%BA24.406&#39;%20w!3m2!1d-23.0401667!2d-46.4067667!4m4!2s23%C2%BA03.007&#39;%20s%2046%C2%BA22.446&#39;%20w%20!3m2!1d-23.0501167!2d-46.3741!4m5!1s0x94cea3367251ad1d%3A0x30313e9ecaecbae5!2sPra%C3%A7a%20Nossa%20Senhora%20do%20Rosario%20-%20Centro%2C%20Piracaia%20-%20SP!3m2!1d-23.054304899999998!2d-46.3571927!5e0!3m2!1spt-BR!2sbr!4v1574176943670!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-12 mt-3">
						<a href="#" disabled class="btn btn-block btn-outline-warning"><i class="fa fa-save px-1"></i> Download</a>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<p class="small">Consulte cada propriedade indivualmente clicando <a href="{{ route('public.attractives') }}">aqui</a>.</p>
			</div>
		</div>
	</div>
</div>
@endsection