@extends('templates.layout')
@section('title', 'Editar')
@section('content')

    <div id="corpo"> 
        <h1>Editar</h1>
        
        <form method="post" action="{{route('jogador.update', $jog)}}" enctype='multipart/form-data'>
        @csrf
        @method('put')
        <p><input label="Nome" type="text" name="nome" placeholder="Nome" value = "{{$jog->nome}}"></p>
        <p><input type="number" name="idade" placeholder="Idade" value = "{{$jog->idade}}"></p>
        <p><input type="text" name="nacionalidade" placeholder="Nacionalidade" value = "{{$jog->nacionalidade}}"></p>
        <p><input type="text" name="clube" placeholder="Clube" value = "{{$jog->clube}}"></p>
        <p><input type="text" name="situacao" placeholder="Situacao" value = "{{$jog->situacao}}"></p>
        <p><input type="file" name="foto" placeholder="Foto" value = "{{$jog->foto}}"></p>
       
        <p><input type="submit" value="Salvar" id="botao_busca">
        <a id="botao_busca" href="{{route('jogador')}}">Voltar</a>
        </form>

        
    </div>
@endsection