<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Header/Navbar -->
<header class="bg-blue-600 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center text-white">
        <h1 class="text-3xl font-semibold">Demo ASIX</h1>
        <nav class="space-x-4">
            <a href="/" class="hover:text-gray-300">Home</a>
            <a href="/players" class="hover:text-gray-300">Jugadores</a>
            <a href="/about" class="hover:text-gray-300">Sobre</a>
        </nav>
    </div>
</header>

<!-- Main Content -->
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8 mt-6">
        <h1 class="text-2xl font-bold mb-6">Eliminar jugador</h1>
        <div>
            <p class="mb-4">Estàs segur que vols eliminar el jugador <strong><?= $player->name ?></strong>?</p>
            <form action="/players/destroy/<?= $player->id ?>" method="POST" class="space-y-4">
                <div>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
                </div>
                <div>
                    <a href="/players" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Cancel·lar</a>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-6">
    <div class="max-w-7xl mx-auto text-center">
        <p>&copy; 2024 Demo ASIX. Desenvolupat per mohammed bensalah younsi.</p>
    </div>
</footer>

</body>
</html>
