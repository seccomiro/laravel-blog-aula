@extends('layouts.blog')

@section('titulo')
  Novo Artigo
@endsection

@section('conteudo')
  <div class="mt-4">
    {!! Form::open(['route' => 'artigos.store']) !!}
      <div class="form-group">
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', '', ['class' => 'form-control', 'required']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('corpo', 'Corpo do Artigo') !!}
        {!! Form::textarea('corpo', '', ['class' => 'form-control', 'rows' => '10', 'required']) !!}
      </div>
      {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
@endsection