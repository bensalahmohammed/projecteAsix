<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Añadiendo transiciones suaves para los enlaces */
        .nav-link:hover {
            color: #cbd5e0;
            transform: scale(1.05);
        }

        /* Animación del botón */
        .btn-hover:hover {
            background-color: #4C6EF5;
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Header/Navbar -->
<header class="bg-indigo-600 p-6 shadow-lg">
    <div class="max-w-7xl mx-auto flex justify-between items-center text-white">
        <h1 class="text-4xl font-extrabold">Demo ASIX</h1>
        <nav class="space-x-6">
            <a href="/" class="nav-link text-lg font-medium hover:text-gray-200 transition-all">Home</a>
            <a href="/books" class="nav-link text-lg font-medium hover:text-gray-200 transition-all">Libros</a>
            <a href="/about" class="nav-link text-lg font-medium hover:text-gray-200 transition-all">Sobre</a>
        </nav>
    </div>
</header>

<!-- Main Content -->
<section>
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-lg p-8 mt-8">
        <h2 class="text-3xl font-semibold text-center mb-6">Editar llibre: <?= $book->name?></h2>
        <div>
            <form action="/books/update/<?= $book->id ?>" method="POST" class="space-y-6">
                <!-- Títol -->
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium text-gray-700">Títol</label>
                    <input type="text" name="name" id="name" value="<?=$book->name?>" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <!-- Autor -->
                <div class="mb-4">
                    <label for="author" class="block text-lg font-medium text-gray-700">Autor</label>
                    <input type="text" name="author" id="author" value="<?=$book->author?>" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <!-- Any -->
                <div class="mb-4">
                    <label for="releaseYear" class="block text-lg font-medium text-gray-700">Any</label>
                    <input type="number" name="releaseYear" id="releaseYear" value="<?=$book->releaseYear?>" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn-hover w-full py-3 px-6 text-lg font-semibold text-white rounded-lg bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Actualitzar Llibre
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6 mt-12">
    <div class="max-w-7xl mx-auto text-center">
        <p class="text-sm">© 2024 Demo ASIX. Desenvolupat per mohammed bensalah younsi.</p>
    </div>
</footer>

</body>
</html>
