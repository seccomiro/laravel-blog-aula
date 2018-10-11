@extends('layouts.blog')

@section('titulo')
    {{ $artigo->titulo }}
@endsection

@section('conteudo')
  <!-- Title -->
  <h1 class="mt-4">{{ $artigo->titulo }}</h1>

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
      <form
        action="{{ url("/artigos/$artigo->id/comentar") }}"
        method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="corpo" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Comentar</button>
      </form>
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
        {{ $comentario->corpo }}
      </div>
    </div>
  @endforeach
@endsection