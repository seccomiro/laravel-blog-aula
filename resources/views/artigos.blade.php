@extends('template')

@section('titulo')
    Artigos do Blog
@endsection

@section('cabecalho')
    {{ "Artigos do Blog" }}
@endsection

@section('conteudo')
    <article>
        <h3>Artigo 1</h3>
        <p>Conteúdo blablabla bla bla!</p>
    </article>
    <article>
        <h3>Artigo 2</h3>
        <p>Conteúdo blablabla bla bla!</p>
    </article>
    <article>
        <h3>Artigo 3</h3>
        <p>Conteúdo blablabla bla bla!</p>
    </article>
@endsection