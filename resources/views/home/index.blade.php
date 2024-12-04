<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina Principal</title>
    <!-- Enllaç a Bootstrap per al disseny -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa; /* Fondo canviat a verd clar */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .btn-container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .btn-container .btn {
            margin: 15px;
            font-size: 1.25rem;
            padding: 20px 40px;
            border-radius: 50px;
            transition: all 0.3s ease;
            width: 200px;
        }
        .btn-container .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-container .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-container .btn-info {
            background-color: #17a2b8;
            border: none;
        }
        .btn-container .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .btn-container .btn:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        footer {
            background-color: #ffffff;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Biblioteca Virtual</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="players">Players</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Contingut principal -->
<div class="container btn-container">
    <a href="/books" class="btn btn-primary">Books</a><br>
    <a href="/players" class="btn btn-success">Players</a><br>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024, Creat per Mohammed Bensalah Younsi. Tots els drets reservats.</p>
</footer>

<!-- Enllaç a JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
