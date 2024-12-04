<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Libro - Demo ASIX</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #495057;
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
        .card {
            border: 1px solid #007bff;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
        }
        .btn-back {
            display: block;
            width: 200px;
            margin: 20px auto;
            background-color: #6c757d;
            color: white;
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
                    <a class="nav-link" href="/books">Libros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h1>Detalles del Libro</h1>

    <!-- Card con los detalles del libro -->
    <div class="card mt-4">
        <div class="card-header">
            Información del Libro
        </div>
        <div class="card-body">
            <p><strong>Id:</strong> <?= $book->id; ?></p>
            <p><strong>Título:</strong> <?= $book->name; ?></p>
            <p><strong>Autor:</strong> <?= $book->author; ?></p>
            <p><strong>Año de Publicación:</strong> <?= $book->releaseYear; ?></p>
        </div>
    </div>

    <!-- Botón para volver -->
    <a href="/books" class="btn btn-back">Volver a la lista</a>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Demo ASIX. Desenvolupat per mohammed bensalah younsi.</p>
</footer>

<!-- Enlace a JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
