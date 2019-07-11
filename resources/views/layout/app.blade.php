<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Token CSRF --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Prodigious - CRUD</title>

        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Estilos CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        {{-- Scripts --}}
            {{-- Bootstrap/JQuery --}}
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"><img src="{{asset('media/logo.png')}}" width="100px" alt="Logotipo Prodigium"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link pd-m" href="{{ route('users.index') }}"><h4><i class="fas fa-users nav-icon"></i>Usuários</h4>
                    <a class="nav-item nav-link pd-m" href="{{ route('users.create') }}"><h4><i class="fas fa-plus nav-icon"></i>Novo usuário</h4></a>
                </div>
            </div>
        </nav>
    <body>
        <div class="container box-tabela">
            @yield('titulo-pagina')
            @yield('conteudo')
        </div>
        @yield('js-pos')
    </body>
</html>
