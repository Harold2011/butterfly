<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.nav_admin')
    
    <h1 class="ml-20 mt-10">Pedidos de la tienda</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre del producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre del cliente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Talla
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compras as $compra)
                    @if ($compra->estado == "activo")
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $productos->firstWhere('id', $compra->producto_id)->nombre }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $usuarios->firstWhere('id', $compra->user_id)->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $compra->descripcion }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $compra->talla }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('compra.destroy', $compra->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-400 text-white p-2 rounded">Eliminar</button>
                                    @role('Admin')
                                        <a href="{{ route('compra.edit', $compra->id) }}" class="bg-gray-400 text-white p-2 rounded">Despachar</a>
                                    @endrole
                                </form>
                            </td>
                        </tr>
                    @else
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $productos->firstWhere('id', $compra->producto_id)->nombre }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $usuarios->firstWhere('id', $compra->user_id)->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $compra->descripcion }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $compra->talla }}
                            </td>
                            <td class="px-6 py-4">
                                Despachado
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
