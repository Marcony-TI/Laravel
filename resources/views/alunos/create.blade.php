<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Alunos</h1>

        <!-- Exibe mensagens de erro -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário de cadastro de alunos -->
        <form action="{{ route('alunos.store') }}" method="POST">
            @csrf
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>
            </div>
            <div>
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" value="{{ old('idade') }}" required>
            </div>
            <div>
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" value="{{ old('curso') }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="matricula">Matricula:</label>
                <input type="text" id="matricula" name="matricula" value="{{ old('matricula') }}" required>
            </div>
            <button type="submit">Cadastrar Aluno</button>
        </form>
    </div>
</body>
</html>
