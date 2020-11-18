@extends('layouts.app')

@section('content')

@if (count($contatos) > 0)
  <table>
    <thead>
        <th>Nome</th>
        <th>Email</th>
    </thead>

    <tbody>
        @foreach ($contatos as $contato)
            <tr>
                <td>{{ $contato->nome }}</td>
                <td>{{ $contato->email }}</td>
                <td>
                  <a href="/contato/{{ $contato->id }}">
                    <button>Atualizar</button>
                  </a>
                </td>
                <td>
                  <form action="/contato/{{ $contato->id }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button>Remover</button>
                  </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <br>
@endif

<a href="/contato">Novo</a>

@endsection
