@extends('layout.app')
@section('titulo-pagina')
    <h3>Edição de usuário:</h3>
@endsection


@section('conteudo')
<form action="{{route('users.update', $usuario->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{  method_field('PUT') }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome do usuário:</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" required autocomplete="nome" value="{{@$usuario->nome}}">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email do usuário:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  required autocomplete="email" value="{{@$usuario->email}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="anexo">Anexo:</label>
        <input type="file" class="form-control" name="anexo">
            <a href="{{ asset('storage/' .  str_after($usuario->anexo, 'public/')) }}" download>{{substr($usuario->anexo, -10)}}</a>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
            <label for="descricao">Descrição pessoal:</label>
            <textarea name="descricao" class="form-control" id="userDescript" cols="40" rows="5">{{@$usuario->descricao}}</textarea>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar usuário" data-toggle="tooltip" data-placement="top" title="Clique para salvar o usuário editado">
</form>
@endsection
