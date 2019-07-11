@extends('layout.app')

@section('titulo-pagina')
<h3>Lista de usuários</h3>
@endsection

@section('conteudo')
<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Descrição</th>
        <th>Anexo</th>
        <th>Operação</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->descricao}}</td>
            <td><a href="{{ asset('storage/' .  str_after($usuario->anexo, 'public/')) }}" download>{{substr($usuario->anexo, -12)}}</a></td>
            <td>
            <form action="{{ route('users.destroy', $usuario->id)}}" class="inline" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
                <button type="submit" class="btn btn-danger"
                onclick=" return confirm('Tem certeza que deseja remover o usuário?')"><i class="fas fa-user-minus"></i></button>
            </form>
            <a href="{{ route('users.edit', $usuario->id) }}" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
<h3>Pesquisar usuários:</h3>
    <form action="{{ route('users.search') }}" id="form-search" method="POST" autocomplete="false">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <div class="center">
                    <input type="text" class="form-control" id="input" name="pesquisa" placeholder="Nome do usuário..." required>
                    <button type="submit" class="btn-primary icone"><i class='fas fa-search'></i></button>
                </div>
            </div>
        </div>
    </form>
    <div id="search-content">

    </div>
</div>
@endsection

@section('js-pos')
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
