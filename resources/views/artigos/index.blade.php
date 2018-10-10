@extends('layouts.blog')

@section('conteudo')
  <h1 class="my-4">Nosso Blog
    <small>Veja as novidades</small>
  </h1>

  @foreach($artigos as $artigo)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">{{ $artigo->titulo }}</h2>
        <p class="card-text">{{ $artigo->corpo }}</p>
        <a href="{{ url('/artigos/' . $artigo->id) }}" class="btn btn-primary">Leia Mais &rarr;</a>
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