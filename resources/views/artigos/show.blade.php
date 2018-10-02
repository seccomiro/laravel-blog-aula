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
        <div class="comentarios">
            <h4>Comentários</h4>
            @foreach($artigo->comentarios as $comentario)
                <p>{{ $comentario->corpo }}</p>
            @endforeach
        </div>
    </article>
@endsection