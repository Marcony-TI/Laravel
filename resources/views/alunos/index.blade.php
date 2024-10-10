<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <a href="./cadastro">Cadastrar</a>
    <h1>Informações do Aluno</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nome do Aluno</th>
                <th>Idade do Aluno</th>
                <th>Email</th>
                <th>Curso</th>
                <th>Matricula</th>
                <th>Data de cadastro</th>
                <th>Ultima atualização</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)

                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->idade }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->curso }}</td>    
                    <td>{{ $aluno->matricula }}</td>
                    <td>{{ $aluno->created_at }}</td>
                    <td>{{ $aluno->updated_at }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
