@extends('layouts.blog')

@section('titulo')
  Novo Artigo
@endsection

@section('conteudo')
  <form class="mt-4" action="{{ url('/artigos') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="titulo">Título</label>
      <input class="form-control" type="text" name="titulo" id="titulo">
    </div>
    <div class="form-group">
      <label for="corpo">Corpo do Artigo</label>
      <textarea class="form-control" rows="10" name="corpo" id="corpo"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publicar</button>
  </form>
@endsection