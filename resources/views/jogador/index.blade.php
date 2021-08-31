@extends('templates.layout')
@section('title', 'Index')
@section('content')
    
    <div id="corpo">    

        <p>
        <a id="botao_busca" href="{{route('jogador.inserir')}}">Inserir jogador</a>
        </p>

        <table border="1">
        <tr>
        <th>Foto</th>
        <th>Jogador</th>
        <th>Idade</th>
        <th>Clube</th>
        <th>Nacionalidade</th>
        <th>Situacao</th>
        <th>Editar</th>
        <th>Deletar</th>
        </tr>
        @foreach($jogs as $jog)
        <tr>
        <td><a href=""> <img src={{$jog->foto}} width='45px' height='50px'/></a></td>
        <td><a href="{{route('jogador.descricao', $jog->id)}}">{{$jog->nome}}</a></td>
        <td>{{$jog->idade}}</td>
        <td>{{$jog->clube}}</td>
        <td>{{$jog->nacionalidade}}</td>
        <td>{{$jog->situacao}}</td>
        <td><a href="{{route('jogador.editar', $jog->id)}}">Editar</a></td>
        <td><a href="{{route('jogador.deletar', $jog->id)}}">Deletar</a></td>
        </tr>
        @endforeach
        </table>
    </div>
@endsection