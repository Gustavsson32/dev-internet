@extends('templates.layout')
@section('title', 'Index')
@section('content')
    
    <div id="corpo">    

        @if (session('usuario.papel') == 'admin')            
            <p><a id="botao_busca" href="{{route('jogador.inserir')}}">Inserir jogador</a></p>
        @endif 

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
        <td><a href="{{route('jogador.descricao', $jog->id)}}"> <img src="{{asset('img/' . $jog->foto)}}" width='100px' height='120px'/></a></td>
        <td><a href="{{route('jogador.descricao', $jog->id)}}">{{$jog->nome}}</a></td>
        <td>{{$jog->idade}}</td>
        <td>{{$jog->clube}}</td>
        <td>{{$jog->nacionalidade}}</td>
        <td>{{$jog->situacao}}</td>        
        
        @if (session('usuario.papel') == 'admin')
            <td><a href="{{route('jogador.editar', $jog->id)}}"><img src="{{asset('img/refresh.png')}}" /></a></td>
        @else
            <td><img src="{{asset('img/refresh.png')}}" /></td>
        @endif  

        @if (session('usuario.papel') == 'admin')
            <td><a href="{{route('jogador.deletar', $jog->id)}}"><img src="{{asset('img/lixeira.png')}}" /></a></td>
        @else
            <td><img src="{{asset('img/lixeira.png')}}" /></td>
        @endif  
        
        </tr>
        @endforeach
        </table>
    </div>
@endsection