@extends('layouts.admin')

@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css">
<link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Admin</a>
		</li>
		<li class="breadcrumb-item active">Atrativos</li>
	</ol>
	
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-plus"></i>
			Novo Atrativo
			<p class="small mt-2 mb-1"><i class="fa fa-angle-right fa-fw"></i> Utilize imagens com no mínimo 500x500 px.</p>
		</div>
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('admin.newAttractive') }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating"> Nome do Local</label>
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome da Propriedade">
							@error('name')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating">Proprietário</label>
							<input type="text" name="owner" class="form-control @error('owner') is-invalid @enderror" value="{{ old('owner') }}" placeholder="Nome do Proprietário">
							@error('owner')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating">Endereço</label>
							<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Rua Piracaia, 00">
							@error('address')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating">Localização (Link Google Maps)</label>
							<input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" placeholder="https://goo.gl/maps/XXXXXXXXXX">
							@error('location')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating">Telefones (Separe com vírgula)</label>
							<input type="text" name="phones" class="form-control @error('phones') is-invalid @enderror" value="{{ old('phones') }}" placeholder="119000000000,11900000000">
							@error('phones')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating">Sites (Separe com vírgula)</label>
							<input type="text" name="sites" class="form-control @error('sites') is-invalid @enderror" value="{{ old('sites') }}" placeholder="site1.com.br,site2.com.br">
							@error('sites')
							<span class="invalid-feedback ml-4" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Marcadores</label>
							<select class="js-example-basic-multiple btn-block" name="states[]" multiple="multiple">
								<option value="Pecuária">Pecuária</option>
								<option value="Agroecológico">Agroecológico</option>
								<option value="Gastronomia">Gastronomia</option>
								<option value="Hospedagem">Hospedagem</option>
							</select>
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Imagens</label>
							<input type="file" name="fotos[]" multiple="multiple" class="form-control-file @error('fotos') is-invalid @enderror">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Coordenada X</label>
							<input type="text" name="x" class="form-control @error('x') is-invalid @enderror" value="{{ old('x') }}" placeholder="-22.000000">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Coordenada Y</label>
							<input type="text" name="y" class="form-control @error('y') is-invalid @enderror" value="{{ old('y')}}" placeholder="-44.000000">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="bmd-label-floating mr-2">Descrição</label>
							<textarea name="description" id="summernote" name="editordata"></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block pull-right">Salvar</button>
						</div>
					</div>
				</div>			
			</form>
		</div>
	</div>
	
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Últimos Adicionados
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="">
						<th>
							Nome
						</th>
						<th>
							Proprietário
						</th>
						<th>
							Tags
						</th>
						<th>
							Publicado em
						</th>
					</thead>
					<tbody>
						@forelse ($attractives as $attractive)
						<tr>
							<td>
								{{ $attractive->name }}
							</td>
							<td>
								{{ $attractive->owner }}
							</td>
							<td>
								{{ $attractive->tags }}
							</td>
							<td>
								{{ date('d/m/Y H:i', strtotime($attractive->created_at)) }}
							</td>
						</tr>
						@empty
						<tr> 
							<td colspan="4">
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

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('js/lang/pt-BR.js') }}"></script>

<script>
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
	$('#summernote').summernote({
		placeholder: 'Descrição do Local',
		tabsize: 2,
		height: 100,
		lang: 'pt-BR'
	});
</script>  
@endsection
