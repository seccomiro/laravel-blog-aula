@extends('layouts.blog')

@section('conteudo')
  <h1 class="my-4">Nosso Blog
    <small>Veja as novidades</small>
  </h1>

  @foreach($artigos as $artigo)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">
          {{ $artigo->titulo }}
          @if ($artigo->user == Auth::user())
            {{ link_to_route(
                'artigos.edit',
                'Editar',
                [$artigo->id],
                ['class' => 'btn btn-info btn-sm']) }}
            {!! Form::open(['route' => 
                  ['artigos.destroy', $artigo->id],
                    'method' => 'DELETE', 'class' => 'd-inline']) !!}
              {!! Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          @endif
        </h2>
        <p class="card-text">{{ $artigo->corpo }}</p>
        {{ link_to_route(
              'artigos.show',
              'Leia Mais &rarr;',
              [$artigo->id],
              ['class' => 'btn btn-primary']) }}
      </div>
      <div class="card-footer text-muted">
        Publicado em {{ $artigo->created_at }} por
        <a href="#">{{ $artigo->user->name }}</a>
      </div>
    </div>
  @endforeach

  <!-- Pagination -->
  <ul class="pagination justify-content-center mb-4">
    <li class="page-item">
      <a class="page-link" href="#">&larr; Antigas</a>
    </li>
    <li class="page-item disabled">
      <a class="page-link" href="#">Novas &rarr;</a>
    </li>
  </ul>
@endsection