@extends('template')

@section('titulo')
    Artigos do Blog - {{ $artigo->titulo }}
@endsection

@section('cabecalho')
    Artigos do Blog - {{ $artigo->titulo }}
@endsection

@section('conteudo')
    <article>
        <h3>{{ $artigo->titulo }}</h3>
        <p>{{ $artigo->corpo }}</p>
    </article>
@endsection