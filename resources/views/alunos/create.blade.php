<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h1>Cadastro de Aluno</h1>

        <form action="{{ route('alunos.store') }}" method="POST">
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
                @error('nome')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" value="{{ old('curso') }}">
                @error('curso')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Salvar</button>
        </form>
    @endsection
</body>
</html>