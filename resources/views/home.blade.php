@extends('layouts.model')
@section("title", "Bienvenido")

@section('content')
<div class="main">
  <img src="/images/india.jpg" class="carousel" alt="india">
  <div class="texto">Bienvenidos a Turismo Seguro</div>

  @include('auth.login')

</div>
@endsection
