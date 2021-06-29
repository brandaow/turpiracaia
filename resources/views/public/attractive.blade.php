@extends('layouts.public')

@section('head')
<div class="page-headers page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190307_110120.jpg') }});">
</div>
@endsection

@section('main')
<?php $colors = array('Pecuária' => 'warning', 'Agroecológico' => 'info', 'Gastronomia' => 'success', 'Hospedagem' => 'primary'); ?>
<div class="main main-raised">
	<div class="section py-3">
		<div class="container">
			<h2 class="mt-4 title text-justify">{{ $attractive->name }}</h2>
			<hr>
			@if($attractive->tags)
				@foreach (explode(',', $attractive->tags) as $tag)
					<span class="badge badge-pill badge-{{ $colors[$tag] }}">{{ $tag }}</span>
			    @endforeach
			@endif
			<hr>
			<div class="row">
				<div class="col-md-5">
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
				</div>
				<div class="col-md-7">
					<p class="card-text lead text-justify">
						@if($attractive->owner)<p><strong>Proprietário:</strong> {{ $attractive->owner }} .</p>@endif
				        @if($attractive->contacts)<p><strong>Contato:</strong> @foreach(explode(",", $attractive->contacts) as $tel) <a href="tel:{{$tel}}" class="phone">{{ $tel }}</a>@if (!$loop->last)<strong> - </strong>@endif @endforeach.</p>@endif
        				@if($attractive->address)<p><strong>Endereço:</strong> {{ $attractive->address}}.</p>@endif
        				@if($attractive->description)<p><strong>Descrição:</strong> {!! substr($attractive->description, 3, -4) !!} </p>@endif
        				@if($attractive->sites)<p><ul> @foreach(explode(",", $attractive->sites) as $site) <li><a href="@if(strstr($site, '@')) mailto:@endif{{ $site }}" target="_blank" rel="noopener noreferrer">{{ $site }}</a></li> @endforeach </ul>@endif
						@if($attractive->location)<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="{{ $attractive->location }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt"></i></a>@endif
						@if($attractive->contacts)<a class="btn btn-dark btn-raised btn-fab btn-round text-white" href="tel:{{ explode(",", $attractive->contacts)[0] }}"><i class="fa fa-phone"></i></a>@endif
					</p>
				</div>
				<a class="btn btn-outline-secondary btn-block mt-4" href="{{ route('public.home') }}">Voltar</a>
			</div>
		</div>
	</div>
</div>
@endsection