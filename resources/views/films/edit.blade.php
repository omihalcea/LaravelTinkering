<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body class="background min-h-screen">
@include('layout.header')
<div class="max-w-lg w-full mx-auto bg-white shadow-md rounded-lg p-6 mt-16">
    <h1 class="text-3xl font-bold mb-4">Editar Pel·licula</h1>
    <form action="{{ route('films.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Títol:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $film->title) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el títol de la pel·lícula">
        </div>

        <div class="mb-4">
            <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
            <input type="text" id="director" name="director" value="{{ old('director', $film->director) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el nom del director">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-sm font-medium text-gray-700">Gènere:</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre', $film->genre) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix el gènere">
        </div>

        <div class="mb-4">
            <label for="duration" class="block text-sm font-medium text-gray-700">Durada (minuts):</label>
            <input type="number" id="duration" name="duration" value="{{ old('duration', $film->duration) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix la durada de la pel·lícula en minuts">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Any d'estrena:</label>
            <input type="number" id="year" name="year" value="{{ old('year', $film->year) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introdueix l'any d'estrena">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Desa els canvis</button>
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
