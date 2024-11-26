@extends('base')

@section('titulo', 'Cadastro')

@section('main')

<div id="container_cadastro">
  <form action="add-usuario" method="post">
    <div class="fundo">
      <div class="text-center mb-4">
        <img src="assets/feliz.png" class="mb-3">
        <h2 class="text-center mb-4">- Cadastro -</h2>
      </div>
      @csrf
      <div class="form-group my-2">
        <label for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="fnome" required>
      </div>
      <div class="form-group my-2">
        <label for="nome">Email: </label>
        <input type="email" class="form-control" id="nome" placeholder="Digite seu email" name="femail" required>
      </div>
      <div class="form-group my-2">
        <label for="nome">Senha: </label>
        <input type="password" class="form-control" id="nome" placeholder="Digite sua senha" name="fsenha" required>
      </div>
      <hr>
      <input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
    </div>
  </form>
</div>

@endsection