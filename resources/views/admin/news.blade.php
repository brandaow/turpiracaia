@extends('layouts.admin')

@section('header')
<link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Admin</a>
		</li>
		<li class="breadcrumb-item active">Notícias</li>
	</ol>
	
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-plus"></i>
			Nova Notícia
			<p class="small mt-2 mb-1"><i class="fa fa-angle-right fa-fw"></i> Utilize imagens com no mínimo 500x500 px.</p>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('admin.newNews') }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="bmd-label-floating">Título</label>
							<input name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Título da Notícia">
							@error('title')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Imagens</label>
							<input type="file" name="foto" class="form-control-file @error('foto') is-invalid @enderror">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="bmd-label-floating">Resumo</label>
							<input name="abstract" type="text" class="form-control @error('abstract') is-invalid @enderror" value="{{ old('abstract') }}" placeholder="Trecho de Destaque">
							@error('abstract')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="bmd-label-floating">Corpo</label>
							<textarea name="body" id="summernote" name="editordata"></textarea>
							@error('body')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-success btn-block pull-right">Salvar</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="card card-plain">
		<div class="card-header card-header-warning">
			<h4 class="card-title">Últimos Adicionados</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="">
						<th>
							Título
						</th>
						<th>
							Visualizações
						</th>
						<th>
							Publicado em
						</th>
					</thead>
					<tbody>
						@forelse ($tidings as $tiding)
						<tr>
							<td>
								{{ $tiding->title }}
							</td>
							<td class="text-center">
								{{ $tiding->views }}
							</td>
							<td class="text-center">
								{{ date('d/m/Y H:i', strtotime($tiding->created_at)) }}
							</td>
						</tr>
						@empty
						<tr> 
							<td colspan="3">
								Nenhum registro disponível para exibição no momento.
							</td>
						</tr>	
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('js/lang/pt-BR.js') }}"></script>

<script>
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
	$('#summernote').summernote({
		placeholder: 'Corpo da Notícia',
		tabsize: 2,
		height: 100,
		lang: 'pt-BR'
	});
</script>  
@endsection
