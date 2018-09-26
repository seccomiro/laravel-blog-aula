@extends('template')

@section('titulo')
    Artigos do Blog
@endsection

@section('cabecalho')
    {{ "Artigos do Blog" }}
@endsection

@section('conteudo')
    @foreach($artigos as $artigo)
        <article>
            <h3>
                <a href="{{ url('/artigos/' . $artigo->id) }}">
                {{ $artigo->titulo }}</a>
            </h3>
            <p>{{ $artigo->corpo }}</p>
        </article>
    @endforeach
@endsection