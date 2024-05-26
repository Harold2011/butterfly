<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    @vite('resources/css/app.css')
</head>
<body>
  @include('components.nav_landing')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            @foreach ($producto as $productos)
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a href="{{ route('tienda.edit', $productos->id) }}" class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('storage/'.$productos->url) }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $productos->nombre }}</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">{{ $productos->descripcion }}</h2>
                  <p class="mt-1">{{ $productos->precio }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
</body>
</html>