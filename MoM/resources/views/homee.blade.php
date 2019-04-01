@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g.png" class="img2">
    </div>
    <a class="btn btn-outline-primary" href="{{route('salas.create')}}" id="home_but_1">Cadastrar <br> sala</a>
    <a class="btn btn-outline-primary" href="#" id="home_but_2">Alocar <br> funcionário</a>
    <a class="btn btn-outline-primary" href="{{route('departamentos.create')}}" id="home_but_3">Cadastrar <br> departamento</a>
    <a class="btn btn-outline-primary" href="/exibir" id="home_but_4">Exibir <br> funcionários</a>
@endsection