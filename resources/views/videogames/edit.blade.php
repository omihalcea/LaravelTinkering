<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videjocs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body class="background min-h-screen">
@include('layout.header')
<div class="max-w-lg w-full mx-auto bg-white shadow-md rounded-lg p-6 mt-16">
    <h1 class="text-3xl font-bold mb-4">Editar Videjoc</h1>
    <form action="{{ route('videogames.update', $videogames->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Títol:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $videogames->title) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el títol del videojoc">
        </div>

        <div class="mb-4">
            <label for="studio" class="block text-sm font-medium text-gray-700">Studio:</label>
            <input type="text" id="studio" name="studio" value="{{ old('studio', $videogames->studio) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el nom de l'estudi">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-sm font-medium text-gray-700">Gènere:</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre', $videogames->genre) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el gènere">
        </div>

        <div class="mb-4">
            <label for="rating" class="block text-sm font-medium text-gray-700">Puntuació (sobre 10):</label>
            <input type="number" id="rating" name="rating" min="0" max="10" value="{{ old('rating', $videogames->rating) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu la puntuació sobre 10">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Any d'estrena:</label>
            <input type="number" id="year" name="year" value="{{ old('year', $videogames->year) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix l'any d'estrena">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Desa els canvis</button>
            <a href="{{ route('videogames.index') }}" class="text-gray-500 hover:underline mt-4 block">Tornar</a>
        </div>
    </form>
</div>
@include('layout.footer')
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .background {
        background-color: #1e1c2a;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .content-fade {
        opacity: 0; /* Inici amb opacitat 0 */
        animation: fadeIn 2s forwards; /* Animació de 2 segons */
    }
</style>
</html>
