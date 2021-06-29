@extends('layouts.public')

@section('head')
<div class="page-headers page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190307_110120.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Onde Ficar</h1>
			</div>
		</div>
	</div>
</div>
@endsection

@section('main')
<?php $colors = array('Pecuária' => 'warning', 'Agroecológico' => 'info', 'Gastronomia' => 'success', 'Hospedagem' => 'primary'); ?>
<div class="main main-raised">
	<form method="POST" action="{{ route('public.searchAttractives') }}">
		{!! csrf_field() !!}
		<div class="row align-items-center d-flex justify-content-center pt-3">
			<div class="col-8 col-md-9">
				<input type="text" name="search" class="form-control" placeholder="Pesquisar">				
			</div>
			<div class="col-2 col-md-1">
				<button type="submit" class="btn btn-dark btn-raised btn-fab btn-round">
					<i class="material-icons">search</i>
				</button>
			</div>
		</div>
	</form>
	<hr>
	<div class="section py-3">
		<div class="container">
			<p class="lead small">Mostrando {{ $attractives->count() }} de um total de {{ $totalAttractives }} atrativos.</p>
			<div class="row">	
				@forelse($attractives as $attractive)
				<div class="col-md-4">
					<div class="card">
						<div id="carouselExampleControls.{{ $attractive->id }}" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								@if($attractive->files)
								@foreach (explode(',', $attractive->files) as $file)
								<div class="carousel-item @if($loop->first) active @endif">
									<img class="d-block w-100" src="{{ asset('uploads/'.$file) }}" alt="{{ $attractive->name }}">
								</div>	
								@endforeach
								@endif
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls.{{ $attractive->id }}" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls.{{ $attractive->id }}" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="card-body">
							<h5 class="card-title">{{ $attractive->name }}</h5>
							<p class="card-text">
								<p>
									<a data-toggle="modal" data-target="#{{ $attractive->id }}" class="btn btn-dark btn-raised btn-fab btn-round text-white"><i class="fa fa-info"></i></a>
									@if($attractive->location)<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="{{ $attractive->location }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>@endif
									@if($attractive->contacts)<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="tel:{{ explode(",", $attractive->contacts)[0] }}"><i class="fa fa-phone"></i></a>@endif
									@auth<form role="form" method="POST" action="{{ route('admin.delAttractive') }}">{!! method_field('delete') !!}{!! csrf_field() !!}<input type="hidden" name="identify" id="identify" value="{{$attractive->id}}"><a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="{{ route('admin.getAttrative', $attractive->id) }}"><i class="fa fa-pencil-alt"></i></a><button type="submit" class="btn btn-dark btn-raised btn-fab btn-round text-white"><i class="icon fa fa-trash-alt"></i></button></form>@endauth
								</p>
								@if($attractive->tags)
								@foreach (explode(',', $attractive->tags) as $tag)
								<span class="badge badge-pill badge-{{ $colors[$tag] }}">{{ $tag }}</span>
								@endforeach
								@endif
							</p>
						</div>
					</div>
				</div>
				@empty
				<p class="lead ml-3">Nenhum registro para ser exibido, tente novamente.</p>
				@endforelse
			</div>
			<div class="row d-flex justify-content-center mt-4">
				<ul class="pagination pagination-primary">
					{{ $attractives->links() }}
				</ul>
			</div>
		</div>	
	</div>
</div>

@foreach($attractives as $attractive)
<div class="modal fade" id="{{ $attractive->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $attractive->id }}" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-muted font-weight-bold">{{ $attractive->name }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-justify" id="body">
				@if($attractive->owner)<p><strong>Proprietário:</strong> {{ $attractive->owner }} .</p>@endif
				@if($attractive->contacts)<p><strong>Contato:</strong> @foreach(explode(",", $attractive->contacts) as $tel) <a href="tel:{{$tel}}" class="phone">{{ $tel }}</a>@if (!$loop->last)<strong> - </strong>@endif @endforeach.</p>@endif
				@if($attractive->address)<p><strong>Endereço:</strong> {{ $attractive->address}}.</p>@endif
				@if($attractive->description)<p><strong>Descrição:</strong> {!! substr($attractive->description, 3, -4) !!} </p>@endif
				@if($attractive->sites)<p><ul> @foreach(explode(",", $attractive->sites) as $site) <li><a href="@if(strstr($site, '@')) mailto:@endif{{ $site }}" target="_blank" rel="noopener noreferrer">{{ $site }}</a></li> @endforeach </ul>@endif
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	@endsection
	
	@section('js')
	<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
	<script type="text/javascript">
		$(function(){  
			var masks = ['(00) 00000-0000', '(00) 0000-00009'];
			$('.phone').mask(masks[1], {onKeyPress: 
				function(val, e, field, options) {
					field.mask(val.length > 14 ? masks[0] : masks[1], options) ;
				}
			});
		});
	</script>
	@endsection