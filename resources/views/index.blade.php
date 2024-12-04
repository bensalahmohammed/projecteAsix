<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #495057;
        }
        h1 {
            color: #007bff;
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
        .btn-create {
            margin-bottom: 20px;
            display: block;
            width: 200px;
            margin: 0 auto;
            background-color: #007bff;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 15px;
            text-align: center;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        table td {
            background-color: #ffffff;
        }
        a {
            color: #007bff;
            margin: 0 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .actions a {
            margin: 0 5px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Header/Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Demo ASIX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/players">Jugadores</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h1>Llista de Jugadores</h1>
    <a href="/players/create" class="btn btn-create">Crear Jugador</a>

    <!-- Tabla de jugadores -->
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Equipo</th>
            <th scope="col">Posición</th>
            <th scope="col">Año de Nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($players as $player): ?>
        <tr>
            <td><?=$player->id;?></td>
            <td><?=$player->name;?></td>
            <td><?=$player->team;?></td>
            <td><?=$player->position;?></td>
            <td><?=$player->birthYear;?></td>
            <td class="actions">
                <a href="/players/show/<?= $player->id?>" class="btn btn-info btn-sm">Show</a>
                <a href="/players/edit/<?= $player->id?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="/players/confirm-delete/<?= $player->id?>" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Demo ASIX. Desenvolupat per mohammed bensalah younsi.</p>
</footer>

<!-- Enlace a JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
