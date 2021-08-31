@extends('templates.layout')
@section('title', 'Visualizar')
@section('content')
    <h1>Visualizar</h1>
    <div id="corpo">    
        <a href=""> <img src={{$jog->foto}} width='45px' height='50px'/></a>
        <p>Jogador: {{$jog->nome}}</p>
        <p>Idade <?php echo $jog->idade; ?></p>
        <p>Clube: {{$jog->clube}}</p>
        <p>Nacionalidade: {{$jog->nacionalidade}}</p>
        <p>Situação: {{$jog->situacao}}</p>
       

        <a id="botao_busca" href="{{route('jogador')}}">Voltar</a>
    </div>
@endsection