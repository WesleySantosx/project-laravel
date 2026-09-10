<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h1>Lista de Alunos</h1>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <a href="{{ route('alunos.create') }}">Cadastrar aluno</a>

        <ul>
            @foreach ($alunos as $aluno)
                <li>
                    {{ $aluno->nome }} - {{ $aluno->curso }}
                    <a href="{{ route('alunos.show', $aluno->id) }}">Detalhes</a>
                    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endsection
</body>
</html>