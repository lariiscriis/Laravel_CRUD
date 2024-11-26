@extends('base')

@section('titulo', 'Login')

@section('main')
@if ($errors->has('debug_email'))
    <div class="alert alert-warning">
        <p><strong>E-mail enviado:</strong> {{ $errors->first('debug_email') }}</p>

    </div>
@endif

<div id="container_cadastro">
    <form action="/entrar_usuario" method="post">
        <div class="fundo">
            <div class="text-center mb-4">
                <img src="assets/feliz.png" alt="">
                <h2 class="text-center mb-4"> - Login - </h2>
            </div>
            @csrf
            <label for="nome">Email: </label>
            <input type="text" name="email" class="form-control" placeholder="Digite seu Email: "><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha: "><br>
            <hr>
            <input type="submit" value="Entrar" class="btn btn-primary btn-block">
        </div>
    </form>
</div>

@endsection