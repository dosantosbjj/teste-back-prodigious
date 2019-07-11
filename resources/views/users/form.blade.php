@extends('layout.app')
@section('titulo-pagina')
<h3>Cadastro de usuários:</h3>
@endsection


@section('conteudo')
<form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do usuário:</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Digite seu nome..." required autocomplete="nome" autofocus>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email do usuário:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Digite seu email..." required autocomplete="email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="anexo">Anexo:</label>
            <input type="file" class="form-control" name="anexo">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
            <label for="descricao">Descrição pessoal:</label>
            <textarea name="descricao" class="form-control" id="userDescript" cols="40" rows="5"></textarea>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar usuário" data-toggle="tooltip" data-placement="top" title="Clique para salvar o usuário">
</form>
<div class="center">
    <a href="{{route('users.index')}}" class="retorno"><i class="fas fa-arrow-left"></i>Voltar para página inicial</a>
</div>
@endsection
