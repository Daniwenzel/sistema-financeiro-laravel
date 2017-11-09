@extends('layouts.master')

@section('title')
    Bem-vindo!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
        <h3>Cadastrar Usuário</h3>
            <form action={{ route('signup') }} method="post">
                <div class="form-control">
                    <label for="email">Seu email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-control">
                    <label for="first_name">Seu Primeiro Nome</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-control">
                    <label for="password">Sua Senha</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="button" class="btn btn-primary">Enviar</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
        <h3>Entrar</h3>
            <form action="#" method="post">
                <div class="form-control">
                    <label for="email">Seu email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-control">
                    <label for="senha">Sua Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha">
                </div>
                <button type="button" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection