<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function cadastroContato(Request $request){

        $validacao = $request->validate([
            'nome' => 'required|min:3',
            'telefone' => 'required',
            'email' => 'required|email'
        ], [
            'required' => 'Insira um :attribute.',
            'min' => 'Insira um :attribute com pelo menos :min caracteres.'
        ]); // está fazendo os erros 

        $contato = Contato::create($validacao);
        return redirect()->route("site.contato.listar"); //leva pra página de listagem
    }

    public function listarContato(){
        $contatos = Contato::all();
        return view('list', compact('contatos'));
    }

    public function editarContato($id){
        $contato = Contato::find($id);
        return view('editar', compact('contato'));
    }

    public function updateContato(Request $request){

        $validacao = $request->validate([
            'id' => 'required|integer',
            'nome' => 'required|min:3',
            'telefone' => 'required',
            'email' => 'required|email'
        ], [
            'required' => 'Insira um :attribute.',
            'min' => 'Insira um :attribute com pelo menos :min caracteres.'
        ]); // está fazendo os erros 

        $contato = Contato::find($validacao ['id'])->update($validacao);
        return redirect()->route("site.contato.listar"); //leva pra página de listagem
    }

    public function excluirContato($id){
        $contato = Contato::find($id)->delete();
        return response()->json([], 200);
    }
}
