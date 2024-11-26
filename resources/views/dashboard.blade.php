@extends('base')

@section('titulo', 'Dashboard')

@section('main')


<div class="d-flex justify-content-center align-items-center">
  <div class="container-custom">
  <form action="/Sair" method="post">
    <div class="row">
      <div class="col-md-6 info-container">
        <h3> Bem Vindo! <i>{{ $nome }}</i></h3><br><br><br>
        <p><strong>Email: </strong> {{ $email }}</p>
        <hr>
        @csrf
        <input type="submit" value="Sair" class="btn2 btn-primary btn-sm">
          </div>
        </form>
          <div class="col-md-6 img-container">
        <img src="assets/minhaconta.png" alt="Dois gatinhos">
      </div>
    </div>
  </div>
</div>

@endsection