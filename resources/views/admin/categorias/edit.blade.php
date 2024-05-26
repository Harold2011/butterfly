<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar categorias</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.nav_admin')

    <h1 class="ml-20 mt-10 text-center">Editar categorias</h1>
    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST" class="max-w-md mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nombre" id="floating_nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $categoria->nombre }}" required />
            <label for="floating_nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Nombre de la categoria</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>
    </form>
</body>
</html>
