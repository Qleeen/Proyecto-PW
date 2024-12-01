<h1>Reporte de Clientes</h1>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->correo }}</td>
            <td>{{ $cliente->telefono }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
