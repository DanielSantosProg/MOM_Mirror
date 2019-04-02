@extends('layout')

@section('content')
    <form action = "{{ route('funcionarios.update', $funcionario) }}" method = "POST">
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='cadastro_lab'>Edição de departamento</h1> 
                <h2 id='nome_depar'>Nome</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_depar_1" name="nome" placeholder = "Digite o nome aqui">
                </div>
                <h2 id='sala_depar'>Sala</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_depar_2" name="sala" placeholder = "Digite o nome da sala aqui">
                </div>
                <h2 id='coordenador_depar'>Coordenador</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_depar_3" name="coordenador" placeholder = "Digite o nome do coordenador aqui">
                </div>


                <button type="submit" class="btn btn-outline-primary" id="depar_but">Editar</button>
            </div>
    </form>
@endsection