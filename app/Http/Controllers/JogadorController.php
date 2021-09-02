<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function index(){
        $jogadores = Jogador::orderBy('id', 'desc')->get();
        return view('jogador.index', ['jogs' => $jogadores]);
    }

    public function view($id){
        $jog = Jogador::find($id);
        return view('jogador.view', ['id' => $id, 'jog' => $jog]);
    }

    public function create(){
        return view('jogador.create');
    }

    public function insert(Request $formulario){
        if (session('usuario.papel') == 'admin'){
            $jogador = new Jogador();
            
            if ($formulario->foto) $path = $formulario->file('foto')->store('', 'imagens');
            else $path = "";
    
    
            $jogador->nome = $formulario->nome;
            $jogador->foto = $path;
            $jogador->idade = $formulario->idade;
            $jogador->nacionalidade = $formulario->nacionalidade;
            $jogador->clube = $formulario->clube;
            $jogador->situacao = $formulario->situacao;
            $jogador->save();            
        }

        return redirect()->route('jogador');
    }

    public function edit(Jogador $jog){
        return view('jogador.edit', ['jog' => $jog]);
    }

    public function update(Jogador $jogador, Request $formulario){
        if ($formulario->foto) $path = $formulario->file('foto')->store('', 'imagens');
        else $path = "";

        $jogador->nome = $formulario->nome;
        $jogador->foto = $path;
        $jogador->idade = $formulario->idade;
        $jogador->nacionalidade = $formulario->nacionalidade;
        $jogador->clube = $formulario->clube;
        $jogador->situacao = $formulario->situacao;
        $jogador->save();
        return redirect()->route('jogador');
    }

    public function delete(Jogador $jog){
      $jog->delete();
      return redirect()->route('jogador');

    }
}
