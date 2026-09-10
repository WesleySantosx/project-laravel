<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluno</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h1>Detalhes do Aluno</h1>
        <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
        <p><strong>Email:</strong> {{ $aluno->email }}</p>
        <p><strong>Curso:</strong> {{ $aluno->curso }}</p>

        <a href="{{ route('alunos.index') }}">Voltar</a>
    @endsection
</body>
</html>
