<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuarios</title>
  </head>
  <body>
    <table border='1'>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
      </tr>
    </THead>
    <tbody>
    @foreach ($lista as $item)
      <tr>
        <td>id: {{$item->id}} |</td>
        <td>name: {{$item->name}} |</td>
        <td>email: {{$item->email}} |</td>
        <td>senha: {{$item->password}} |</td>
      </tr>
      @endforeach
    </tbody>  
    </table>
  </html>

