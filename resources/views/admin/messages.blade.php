@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Admin</a>
		</li>
		<li class="breadcrumb-item active">Mensagens</li>
	</ol>
	
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-inbox"></i>
			Caixa de Entrada
			<p class="small mt-2 mb-1"><i class="fa fa-angle-right fa-fw"></i> Limite de 15 mensagens.</p>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="">
						<th>
						</th>
						<th class="text-center">
							Data
						</th>
						<th>
							Nome
						</th>
						<th>
							Email
						</th>
						<th>
							Mensagem
						</th>
					</thead>
					<tbody>
						@forelse ($messages as $message)
						<tr @if(!$message->readed)class="bg-light"@endif>
							<td>
								<form role="form" method="POST" action="{{ route('admin.reply') }}">
									{!! csrf_field() !!}
									<input id="code" name="code" type="hidden" value="{{$message->id}}">
									<button type="submit" class="btn btn-primary"><i class="fa fa-reply text-white"></i></button>
								</form>
							</td>
							<td class="text-center">
								@if(!$message->readed)<b>@endif{{ date('d/m/Y H:i', strtotime($message->created_at)) }}
							</td>
							<td>
								@if(!$message->readed)<b>@endif{{ $message->name }}
							</td>
							<td>
								@if(!$message->readed)<b>@endif{{ $message->email }}
							</td>
							<td>
								@if(!$message->readed)<b>@endif{{ $message->message }}
							</td>
						</tr>
						@empty
						<tr> 
							<td colspan="5">
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
