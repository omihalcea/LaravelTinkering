<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videjocs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="background min-h-screen">
@include('layout.header')
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-16 container flex-grow content-fade flex flex-col items-center text-center">
    <h1 class="text-2xl font-bold mb-4">Afegeix un nou videojoc</h1>
    <form action="{{ route('videogames.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Titol:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu el titol del videojoc">
        </div>

        <div class="mb-4">
            <label for="studio" class="block text-sm font-medium text-gray-700">Studio:</label>
            <input type="text" id="studio" name="studio" value="{{ old('studio') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu el nom del studio">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-sm font-medium text-gray-700">Genere:</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu el genere">
        </div>

        <div class="mb-4">
            <label for="rating" class="block text-sm font-medium text-gray-700">Puntuació (sobre 10):</label>
            <input type="number" id="rating" name="rating" min="0" max="10" value="{{ old('rating') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu la puntuació sobre 10">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Any de sortida:</label>
            <input type="number" id="year" name="year" value="{{ old('year') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Escriu l'any de sortida">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir videojoc</button>
        <a href="/videogames" class="text-gray-500 hover:underline mt-4 block">Tornar</a>
    </form>
</div>
@include('layout.footer')
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        position: relative;
        min-height: 100vh;
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
