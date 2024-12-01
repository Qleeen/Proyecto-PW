<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Hoteles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Reporte de Hoteles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Estado</th>
                <th>Lugar</th>
                <th>Precio</th>
                <th>Personas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hoteles as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->nombre }}</td>
                    <td>{{ $hotel->pais }}</td>
                    <td>{{ $hotel->estado }}</td>
                    <td>{{ $hotel->lugar }}</td>
                    <td>{{ $hotel->precio }}</td>
                    <td>{{ $hotel->personas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
