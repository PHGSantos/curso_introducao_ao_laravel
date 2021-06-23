<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
           (Object)["nome"=>"Seth Wilson", "tel"=>"12345678"],
           (Object)["nome"=>"Bruce Morris", "tel"=>"12345678"],
           (Object)["nome"=>"James Deen", "tel"=>"12345678"],
           (Object)["nome"=>"Alex R.", "tel"=>"12345678"],
           (Object)["nome"=>"Chris Steinfield", "tel"=>"12345678"],
           (Object)["nome"=>"Maggie Wylde", "tel"=>"12345678"],
           (Object)["nome"=>"Dennis Jhonson", "tel"=>"12345678"],
           (Object)["nome"=>"Johnny Hitch", "tel"=>"12345678"],
           (Object)["nome"=>"Jordan M.", "tel"=>"12345678"],
           (Object)["nome"=>"Rafael Silva", "tel"=>"12345678"],
           (Object)["nome"=>"Kyle Dean", "tel"=>"12345678"],
           (Object)["nome"=>"Bo Burnham", "tel"=>"12345678"],
           (Object)["nome"=>"Alex Maeson", "tel"=>"12345678"],
           (Object)["nome"=>"Claudia Rizzo", "tel"=>"12345678"],
           (Object)["nome"=>"Kristina Souza", "tel"=>"12345678"],
           (Object)["nome"=>"Kevin Page", "tel"=>"12345678"],
           (Object)["nome"=>"Zane Silverstein", "tel"=>"12345678"],
           (Object)["nome"=>"Blake Mitchell", "tel"=>"12345678"],
           (Object)["nome"=>"Manuel Carlos", "tel"=>"12345678"],
           (Object)["nome"=>"Jack Willis", "tel"=>"12345678"],
           (Object)["nome"=>"Tyler Brown", "tel"=>"12345678"]
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
