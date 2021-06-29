@extends('layouts.public')

@section('head')
<div class="page-headers page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190307_110120.jpg') }});">
</div>
@endsection

@section('main')
<div class="main main-raised">
	<div class="section py-3">
		<div class="container">
			<h2 class="mt-4 title text-justify">{{ $new->title }}</h2>
			<hr>
			<p class="text-muted">Publicado em {{ date('d/m/Y', strtotime($new->created_at)) }} por {{ $new->user->name }}</p>
			<hr>
			<div class="row">
				<div class="col-md-5">
					<img class="img-fluid rounded mx-auto d-block" src="{{ asset('uploads/'.$new->files) }}" alt="{{ $new->title }}">
				</div>
				<div class="col-md-7">
					{!! str_replace('<p>', '<p class="lead text-justify">', $new->body) !!}
				</div>
				<a class="btn btn-outline-secondary btn-block mt-4" href="{{ route('public.news') }}">Voltar</a>
			</div>
		</div>
	</div>
</div>
@endsection