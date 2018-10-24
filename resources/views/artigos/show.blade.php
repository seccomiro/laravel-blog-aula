@extends('layouts.blog')

@section('titulo')
    {{ $artigo->titulo }}
@endsection

@section('conteudo')
  <!-- Title -->
  <h1 class="mt-4">
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
  </h1>

  <!-- Author -->
  <p class="lead">
    por
    <a href="#">{{ $artigo->user->name }}</a>
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Publicado em {{ $artigo->created_at }}</p>

  <hr>

  <hr>

  <!-- Post Content -->
  <p>{{ $artigo->corpo }}</p>

  <hr>

  <!-- Comments Form -->
  <div class="card my-4">
    <h5 class="card-header">Deixe seu Comentário:</h5>
    <div class="card-body">
      {!! Form::open(['route' => ['comentarios.store', $artigo->id]]) !!}
        <div class="form-group">
          {!! Form::textarea('corpo', '', ['class' => 'form-control', 'rows' => '3']) !!}
        </div>
        {!! Form::submit('Comentar', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>

  @foreach($artigo->comentarios as $comentario)
    <!-- Single Comment -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">{{ $comentario->user->name }}
          {{ $comentario->created_at->diffForHumans() }}
        </h5>
        <div class="comentario">
          <div class="original">
            <span class="texto-corpo">{{ $comentario->corpo }}</span>
            @if ($comentario->user == Auth::user())
              <button class="btn btn-light btn-sm btn-editar-comentario">Editar</button>
            @endif
          </div>
          <div class="editar">
            {!! Form::open(['route' => ['comentarios.update', $artigo->id, $comentario->id], 'method' => 'PUT', 'class' => 'form-editar-comentario']) !!}
              <div class="form-group">
                {!! Form::textarea('corpo', $comentario->corpo, ['class' => 'form-control', 'rows' => '3']) !!}
              </div>
              {!! Form::submit('Atualizar Comentário', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection