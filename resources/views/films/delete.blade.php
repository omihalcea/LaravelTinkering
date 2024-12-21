<!DOCTYPE html>
<html lang="es">
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
<?php require '../resources/views/layout/header.blade.php' ?>
<div class="max-w-lg w-full mx-auto bg-white shadow-md rounded-lg p-6 mt-16 flex-grow content-fade items-center text-center container">
    <h1 class="text-3xl font-bold mb-4">Delete Film</h1>
    <p>Vols eliminar la peli "<?= htmlspecialchars($film->titulo) ?>"?</p>
    <form action="{{ route('films.destroy') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="id" value="{{ $film->id }}">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
    </form>

    <a href="/films" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
</div>
<footer id="footer" class="text-white text-center mt-8 p-4">
    <?php require '../resources/views/layout/footer.blade.php' ?>
</footer>
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

    #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
</html>
