<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.nav_landing')

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/'.$productos->url) }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest">Producto</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $productos->nombre }}</h1>
              <div class="flex mb-4">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalle</h2>
              </div>
              <p class="leading-relaxed">{{ $productos->descripcion }}</p>
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                <span class="title-font font-medium text-2xl text-gray-900">${{ $productos->precio }}</span>
              </div>
              
              @auth
              <form action="{{ route('compra.store') }}" method="POST">
                @csrf
                <input name="producto_id" type="hidden" value="{{ $productos->id }}"/>
                  <div class="flex ml-6 items-center mb-4">
                    <span class="mr-3">Tamaño</span>
                    <div class="relative">
                      <select name="talla" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                        <option>SM</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                    </div>
                  </div>
                <div class="mb-4">
                  <span>Ingrese la descripción específica que quiera del producto:</span>
                </div>
                <div class="mb-4">
                  <textarea name="descripcion" class="w-full rounded border border-gray-300 py-2 px-3 text-base leading-normal focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500"></textarea>
                </div>
                <div class="flex">
                  <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Comprar</button>
                </div>
              </form>
              @else
              <div class="flex">
                <span class="ml-auto text-red-500">Por favor, <a href="{{ route('login') }}" class="text-indigo-500 underline">inicie sesión</a> para comprar.</span>
              </div>
              @endauth
            </div>
          </div>
        </div>
      </section>
</body>
</html>
