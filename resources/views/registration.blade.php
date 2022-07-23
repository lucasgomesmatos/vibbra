@extends('master.master')

@section('my-css')
<link rel="stylesheet" href="{{ url(mix('assets/css/styles.css')) }}">
@endsection

@section('content')
<div class="container">
  <h1>Vibbra Cadastrar</h1>
  <form action="">
    <a href="">
      <div class="input_google">Login com Google</div>
    </a>
    <label for="email">Email</label>
    <input type="email" id="email">

    <label for="name">Nome</label>
    <input type="text" id="name">

    <label for="name-company">Nome da Empresa</label>
    <input type="text" id="name-company">

    <label for="tel">Telefone <span class="optional">(opcional)</span></label>
    <input type="tel" id="tel">

    <label for="tel">Endereço <span class="optional">(opcional)</span></label>
    <input type="text" id="text">

    <label for="password">Senha</label>
    <input type="password" id="password">

    <button>Enviar</button>
  </form>
</div>
@endsection

@section('my-js')
<script type="module" src="{{ url(mix('assets/js/scripts.js')) }}"></script>
@endsection
