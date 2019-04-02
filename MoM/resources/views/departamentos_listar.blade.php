@extends('layout')

@section('content')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Coordenador</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departamento as $depar)
            <tr>
                <td>{{ $depar->id }}</td>
                <td>{{ $depar->nome }}</td>
                <td>{{ $depar->coordenador }}</td>
                <td>{{ $depar->sala }}</td>
                <td>
                  <form action = "{{ route('departamento.destroy', $depar->id) }}" method = "POST">
                    @csrf
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