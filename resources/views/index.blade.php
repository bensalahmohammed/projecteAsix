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
            margin-top: 30px;
        }
        .table-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        table td {
            background-color: #ffffff;
        }
        .btn-create {
            display: block;
            width: 200px;
            margin: 20px auto;
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-create:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 30px;
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
                    <a class="nav-link" href="/players">Jugadors</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<section class="container mt-5">
    <h1>Llista de Jugadors</h1>

    <!-- Botón de creación -->
    <a href="/players/create" class="btn-create">Crear Jugador</a>

    <div class="table-container">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Equip</th>
                <th scope="col">Posició</th>
                <th scope="col">Any de Naixement</th>
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
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Demo ASIX. Desenvolupat per mohammed bensalah younsi.</p>
</footer>

<!-- Enlace a JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
