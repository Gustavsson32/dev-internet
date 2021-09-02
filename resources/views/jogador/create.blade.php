@extends('templates.layout')
@section('title', 'Inserir')
@section('content')

    <h1>Inserir</h1>
    <div id="corpo">        
    <form method="post" action="{{route('jogador.gravar')}}" enctype='multipart/form-data'>
    @csrf
    <p><input type="text" name="nome" placeholder="Nome"></p>
    <p><input type="number" name="idade" placeholder="Idade"></p>
    <p><input type="text" name="nacionalidade" placeholder="Nacionalidade"></p>
    <p><input type="text" name="clube" placeholder="Clube"></p>
    <p><input type="text" name="situacao" placeholder="Situacao"></p>
    <p><input type="file" name="foto" placeholder="Foto"></p>
    <p><input type="submit" value="Gravar" id="botao_busca" >

    <a id="botao_busca" href="{{route('jogador')}}">Voltar</a>
    </form>
    
    </div>
@endsection