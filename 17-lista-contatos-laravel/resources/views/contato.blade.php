@extends('layouts.app')

@section('content')

@include('common.errors')

<h4>Cadastrar Contato</h4>

<form action="/contato" method="POST">
    {{ csrf_field() }}

    <div>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="contato-nome"
        @if (isset($contato)) value="{{ $contato->nome }}" @endif>
    </div>
    <br>

    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="contato-email"
          @if (isset($contato)) value="{{ $contato->email }}" @endif>
    </div>
    <br>

    @if (isset($contato))
      <input type="hidden" name="id" id="contato-id" value="{{ $contato->id }}">
    @endif

    <div>
      <button type="submit">Salvar</button>
    </div>
</form>

@endsection
