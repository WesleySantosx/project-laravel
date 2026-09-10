<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos por Professor</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h1>Alunos por Professor</h1>

        @foreach ($professors as $professor)
            <h2>{{ $professor->nome }}</h2>

            @if ($professor->alunos->isEmpty())
                <p>Nenhum aluno vinculado.</p>
            @else
                <ul>
                    @foreach ($professor->alunos as $aluno)
                        <li>{{ $aluno->nome }} - {{ $aluno->curso }}</li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    @endsection
</body>
</html>
