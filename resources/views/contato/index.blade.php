@extends('layout.site')

@section('titulo', 'Contatos')

<h3>Essa é a view index</h3>

@section('conteudo')
    @foreach($contatos as $contato)
        <p>Nome: {{ $contato->nome }}</p>
        <p>Tel: {{ $contato->tel }}</p>
        <br>
    @endforeach
@endsection
