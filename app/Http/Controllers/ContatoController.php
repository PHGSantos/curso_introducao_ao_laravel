<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
           (Object)["nome"=>"Seth Gamble", "tel"=>"12345678"],
           (Object)["nome"=>"Bruce Venture", "tel"=>"12345678"],
           (Object)["nome"=>"James Deen", "tel"=>"12345678"],
           (Object)["nome"=>"Alex D.", "tel"=>"12345678"],
           (Object)["nome"=>"Chris Diamond", "tel"=>"12345678"],
           (Object)["nome"=>"Danny Wylde", "tel"=>"12345678"],
           (Object)["nome"=>"Dennis Reed", "tel"=>"12345678"],
           (Object)["nome"=>"Johnny Rapid", "tel"=>"12345678"],
           (Object)["nome"=>"Jordi El Niño Polla", "tel"=>"12345678"],
           (Object)["nome"=>"Rafael Alencar", "tel"=>"12345678"],
           (Object)["nome"=>"Kyle Dean", "tel"=>"12345678"],
           (Object)["nome"=>"Bo Sinn", "tel"=>"12345678"],
           (Object)["nome"=>"Arad Winwin", "tel"=>"12345678"],
           (Object)["nome"=>"Armond Rizzo", "tel"=>"12345678"],
           (Object)["nome"=>"Kris Evans", "tel"=>"12345678"],
           (Object)["nome"=>"Kevin Warhol", "tel"=>"12345678"],
           (Object)["nome"=>"Zane Williams", "tel"=>"12345678"],
           (Object)["nome"=>"Blake Mitchell", "tel"=>"12345678"],
           (Object)["nome"=>"Manuel Ferrara", "tel"=>"12345678"],
           (Object)["nome"=>"Jack Harrer", "tel"=>"12345678"],
           (Object)["nome"=>"Tyler Nixon", "tel"=>"12345678"]
        ];
        
        $contato = new Contato();
        dd($contato->lista());
        
        return view('contato.index', compact('contatos'));
    }

    public function criar( Request $req){
        dd($req->all());
        return "criar controller do ContatoController";
    }

    public function editar(){
        return "editar controller do ContatoController";
    }
}
