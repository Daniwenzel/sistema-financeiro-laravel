@extends('layouts.master')

@section('content')
@include('includes.message')
	<section class="row new-gasto">
		<div class="col-md-6 col-md-offset-2">
			<h3>Cadastrar Valor</h3>
			<form action="{{ route('postgasto') }}" method="post">
				<div class="form-group" >
					<label for="descricao">Descrição do Valor</label>
                    <textarea class="form-control" rows="4" name="descricao" id="descricao" placeholder="Descrição do valor a ser adicionado"></textarea> 
				</div>
				<div class="form-group" >
					<label for="valor">Valor</label>
                    <input class="form-control" type="number" step="0.01" name="valor" id="valor">
				</div>
				<div class="form-group" >
					<label for="desconto">Desconto</label>
                    <input class="form-control" type="number" step="0.01" name="desconto" id="desconto">
				</div>
				<div class="form-group" >
					<label for="multa">Multa</label>
                    <input class="form-control" type="number" step="0.01" name="multa" id="multa">
				</div>
				<button type="submit" class="btn btn-primary">Enviar Valor</button>		
				<input type="hidden" name="_token" value="{{ Session::token() }}">	
			</form>
		</div>
	</section>

	<section class="row gastos">
		<table class="table table-bordered">
    		<thead>
      		<tr>
        		<th>Descrição</th>
        		<th>Valor</th>
        		<th>Desconto</th>
        		<th>Multa</th>
        		<th>Editar</th>
        		<th>Deletar</th>
      		</tr>
    		</thead>		
    		@foreach($gastos as $gasto)
			<tbody>
      		<tr>
        		<td>{{ $gasto->descricao }}</td>
        		<td>{{ $gasto->valor }}</td>
        		<td>{{ $gasto->desconto }}</td>
        		<td>{{ $gasto->multa }}</td>
        		<td><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
        		<td><a href="{{ route('gasto.delete', ['gasto_id' => $gasto->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      		</tr>
    		</tbody>			
			@endforeach
		</table>
	</section>
@endsection