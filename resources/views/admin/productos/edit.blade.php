<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar producto</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.nav_admin')

    <h1 class="ml-20 mt-10 text-center">Editar producto</h1>
    <form action="{{ route('Productos.update', $productos->id) }}" method="POST" class="max-w-md mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nombre" id="floating_nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $productos->nombre }}" required />
            <label for="floating_nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Nombre del producto</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="descripcion" id="floating_descripcion" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $productos->descripcion }}" required />
            <label for="floating_descripcion" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Descripción</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="precio" id="floating_precio" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $productos->precio }}" required />
            <label for="floating_precio" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Precio</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="file" name="url" id="floating_url" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_url" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Imagen</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <select name="categoria_id" id="floating_categoria_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if($categoria->id == $productos->categoria_id) selected @endif>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            <label for="floating_categoria_id" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600">Categoría</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>
    </form>
</body>
</html>
