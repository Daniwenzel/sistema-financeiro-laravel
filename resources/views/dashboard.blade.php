@extends('layouts.master')

@section('title')
    Bem-vindo
@endsection

@section('content')
@include('includes.message')

	<section class="row new-gasto">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>Cadastrar Valor</h3></header>
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
      		<tr data-gastoid="{{ $gasto->id }}">
        		<td>{{ $gasto->descricao }}</td>
        		<td>{{ $gasto->valor }}</td>
        		<td>{{ $gasto->desconto }}</td>
        		<td>{{ $gasto->multa }}</td>
	        	<td><a class="editbtn" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
	        	<td><a href="{{ route('gasto.delete', ['gasto_id' => $gasto->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      		</tr>
    		</tbody>			
			@endforeach
		</table>
	</section>

	 <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar Gasto</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="descricao-body">Descrição</label>
                            <textarea  class="form-control" rows="4" name="descricao-modal" id="descricao-modal"></textarea> 
                            <label for="valor-body">Valor</label>
                            <input class="form-control" type="number" step="0.01" name="valor-modal" id="valor-modal">
                            <label for="desconto-body">Desconto</label>
                            <input class="form-control" type="number" step="0.01" name="desconto-modal" id="desconto-modal">
                            <label for="multa-body">Multa</label>
                            <input class="form-control" type="number" step="0.01" name="multa-modal" id="multa-modal">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Salvar alterações</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    	var token =  '{{ Session::token() }}';
    	var url = '{{ route('edit') }}';
    </script>
@endsection