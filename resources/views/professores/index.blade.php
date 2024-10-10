<!DOCTYPE html>
<html>
<head>
    <title>Lista de Professores</title>
</head>
<body>
    <h1>Professores, Salas e Endereços</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nome do Professor</th>
                <th>Endereço do Professor</th>
                <th>Sala do Professor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professores as $professor)
                <tr>
                    <td>{{ $professor->nome }}</td>
                    <td>
                        {{ $professor->endereco->rua }},
                        {{ $professor->endereco->cidade }} -
                        {{ $professor->endereco->estado }}
                    </td>
                    <td>{{ $professor->sala->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
