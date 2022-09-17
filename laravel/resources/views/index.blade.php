<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <table>
        <thead>
            <th>ID_administrador</th>
            <th>Nombre_Admin</th>
        </thead>
    <tbody>
        @foreach($listado as $l)
    <tr>
        <td>{{$l->ID_administrador}}</td>
        <td>{{$l->Nombre_Admin}}</td>
        <td><a class="btn btn-warning">Editar</a> <a class="btn btn-success">detalles</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
