<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruductos</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.nav_admin')
    <a href="{{ route('Productos.create')}}">
        <button class="ml-20 p-56 inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Registrar nuevo producto</button>
    </a>
    <h1 class="ml-20 mt-10">Productos de la tienda</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre del producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Accion
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $productos)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $productos->nombre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $productos->descripcion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $productos->precio }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="h-14" src="{{ asset('storage/'.$productos->url) }}" alt="Imagen del producto"/>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('Productos.destroy', $productos->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-400 text-white p-2 rounded">Eliminar</button>
                                <a href="{{ route('Productos.edit', $productos->id) }}" class="bg-gray-400 text-white p-2 rounded">Editar</a>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>


  
    
</body>
</html>