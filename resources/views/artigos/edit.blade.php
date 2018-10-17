@extends('layouts.blog')

@section('titulo')
  Editando Artigo
  <small>{{ $artigo->titulo }}</small>
@endsection

@section('conteudo')
  <div class="mt-4">
    {!! Form::open(['route' => 
                    ['artigos.update', $artigo->id], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', $artigo->titulo, ['class' => 'form-control', 'required']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('corpo', 'Corpo do Artigo') !!}
        {!! Form::textarea('corpo', $artigo->corpo, ['class' => 'form-control', 'rows' => '10', 'required']) !!}
      </div>
      {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
@endsection