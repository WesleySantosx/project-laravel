<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    <nav>
        <a href="{{ route('alunos.index') }}">Alunos</a>
        <a href="{{ route('alunos.create') }}">Cadastrar</a>
    </nav>

    @yield('content')
</body>
</html>