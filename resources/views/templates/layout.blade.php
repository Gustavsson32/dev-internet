<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>    
    
    
</head>
<body>

<div id="corpo">
<div align="right">
@if (session('usuario'))
Usuário autenticado: {{ session('usuario.nome') }}
<a id="botao_busca" type="button" class="btn btn-primary" href="{{ route('usuario.logout') }}">Sair</a>
@else
<a id="botao_busca" type="button" class="btn btn-primary" href="{{ route('usuario.index') }}">Login</a>        
@endif  
</div>


@yield('content')
<br>
</div>

   







</body>
</html>