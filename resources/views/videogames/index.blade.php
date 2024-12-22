<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videjocs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
@include('layout.header')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-16 container flex-grow content-fade">
    <h1 class="text-3xl font-bold mb-4">Videjocs</h1>
    <a href="{{ route('videogames.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir nou videjoc</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Titol</th>
            <th class="py-3 px-6 text-left">Studio</th>
            <th class="py-3 px-6 text-center">Any d'astrena</th>
            <th class="py-3 px-6 text-center">Accions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        @if ($videogames->isEmpty())
            <tr>
                <td colspan="5" class="py-3 px-6 text-center">No hi ha videojocs disponibles.</td>
            </tr>
        @else
            @foreach ($videogames as $videogame)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $videogame->id }}</td>
                    <td class="py-3 px-6">{{ $videogame->title }}</td>
                    <td class="py-3 px-6 ">{{ $videogame->studio }}</td>
                    <td class="py-3 px-6 text-center">{{ $videogame->year }}</td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex justify-center space-x-3">
                            <a href="{{ route('videogames.edit', $videogame->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                            <a href="{{ route('videogames.show', $videogame->id) }}" class="text-blue-500 hover:text-blue-700">Mes info</a>
                            <form action="{{ route('videogames.destroy', $videogame->id) }}" method="POST" onsubmit="return confirm('Estas segur d&rsquo;eliminar el següent videojoc?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

<div>
    @include('layout.footer')
</div>
</body>
<style>
    html {
        min-height: 100%;
        position: relative;
    }
    body {
        margin: 0;
        margin-bottom: 40px;
    }
</style>
</html>
