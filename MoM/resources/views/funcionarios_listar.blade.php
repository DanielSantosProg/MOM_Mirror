@extends('layout')

@section('content')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Endereço</th>
            <th scope="col">Foto</th>
            <th scope="col">RUB</th>
            <th scope="col">Posição</th>
            <th scope="col">ID do departamento</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $func)
            <tr>
                <td>{{ $func->id }}</td>
                <td>{{ $func->nome }}</td>
                <td>{{ $func->sexo }}</td>
                <td>{{ $func->endereço }}</td>
                <td><img id="foto_func" src="../storage/{{ $func->foto }}" ></td>
                <td>{{ $func->rub }}</td>
                <td>{{ $func->posição }}</td>
                <td>{{ $func->departamento["nome"]}}</td>
                <td>                  
                  <form action = "{{ route('funcionarios.destroy', $func->id) }}" method = "POST">
                    @csrf       
                    <a href ="{{ route('funcionarios.edit', $func->id) }}" class="btn btn-success">Editar</a>       
                    @method('DELETE')
                    <button type = "submit" class="btn btn-danger">Excluir</button>
                  </form>
                </td>
                </td>                   
            </tr>          
            @endforeach     
        </tbody>
      </table>
    @endsection