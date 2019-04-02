@extends('layout')

@section('content')
<div class='rectangle'>
    <form action = "{{ route('funcionarios.update', $funcionario) }}" method = "POST" enctype="multipart/form-data">        
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='cadastro_lab'>Edição de funcionário</h1> 
                <h2 id='nome_cad'>Nome</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_1" name="nome" placeholder = "Digite o nome aqui" value="{{ $funcionario->nome }}">
                </div>
                <h2 id='senha_cad'>Senha</h2>
                <div>
                    <input type = "password" class = "form-control" id="dados_cad_2" name="senha" placeholder = "Digite a senha aqui" value="{{ $funcionario->senha }}">
                </div>
                <h2 id='end_cad'>Endereço</h2>
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_3" name="endereço" placeholder = "Digite seu endereço aqui" value="{{ $funcionario->endereço }}">
                </div>
                <h2 id='rub_cad'>RUB</h2>        
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_4" name="rub" placeholder = "Digite o número do seu RUB aqui" value="{{ $funcionario->rub }}">
                </div>
                <h2 id='pos_cad'>Posição</h2>        
                <div>
                    <input type = "text" class = "form-control" id="dados_cad_0" name="posição" placeholder = "Digite a posição/cargo" value="{{ $funcionario->posição }}">
                </div>
                <h2 id ='sex_cad'>Sexo</h2>                    
                <div>
                    <input class="rad_but" id="rad_masc" type="radio" name="sexo" value="{{ $funcionario->sexo }}">
                    <h2 id="lab_masc">Masculino</h2>
                    <input class="rad_but" id="rad_fem" type="radio" name="sexo" value="{{ $funcionario->sexo }}">
                    <h2 id="lab_fem">Feminino</h2>
                </div>                
                <h2 id='foto_cad'>Foto
                <input type = "file" class = "form-control-file" id="foto" name="foto" value="{{ $funcionario->foto }}">
                </h2>
                <button type="submit" class="btn btn-outline-primary" id="cad_but">Salvar</button>
            </div>
    </form>
</div>
@endsection        