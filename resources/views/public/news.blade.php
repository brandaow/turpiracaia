@extends('layouts.public')

@section('head')
<div class="page-headers page-header header-filter" data-parallax="true" style="background-image: url({{ asset('img/20190307_110120.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Notícias</h1>
			</div>
		</div>
	</div>
</div>
@endsection

@section('main')
<div class="main main-raised">
	<div class="section py-3">
		<div class="container">
			@forelse($news as $new)
			<div class="row">
				<div class="col-md-5">
					<img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('uploads/'.$new->files) }}" alt="{{ $new->title }}">
				</div>
				<div class="col-md-7">
					<h3 class="text-justify">{{ $new->title }}</h3>
					<p class="text-justify">{{ $new->abstract }}</p>
					<p class="text-muted mt-3 mb-3">Publicado em {{ date('d/m/Y', strtotime($new->created_at)) }}</p>
					<a class="btn btn-primary" href="{{ route('public.new', $new->id) }}">Ver Mais <i class="fa fa-fw fa-arrow-right pl-2"></i></a>
				</div>
			</div>
			<hr>
			@empty
			<p class="lead ml-3">Nenhum registro para ser exibido, tente novamente.</p>
			@endforelse		
		</div>
	</div>
</div>
@endsection