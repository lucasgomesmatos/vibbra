@extends('master.master')

@section('my-css')
<link rel="stylesheet" href="{{ url(mix('assets/css/styles.css')) }}">
@endsection

@section('content')
<div class="container">
  <h1>Vibbra Login</h1>
  <form action="">
    <a href="">
      <div class="input_google">Login com Google</div>
    </a>
    <label for="email">Email</label>
    <input type="email" id="email">
    <label for="password">Senha</label>
    <input type="password" id="password">
    <a href="" class="password_recover">Recuperar a senha</a>

    <label for="automatic_login" class="automatic_login">
      <input type="checkbox" name="automatic_login" id="automatic_login">
      Lembre-me
    </label>

    <button>Acessar</button>
  </form>
</div>
@endsection

@section('my-js')
<script type="module" src="{{ url(mix('assets/js/scripts.js')) }}"></script>
@endsection
