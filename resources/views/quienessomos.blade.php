<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>¿quienes somos?</title>
</head>
<body>
    @include('components.nav_landing')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-2/3 mx-auto">
            <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
              <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ asset('storage/img/quienessomos.png')}}">
              <div class="text-center relative z-10 w-full">
                <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">Nuestros Servicios</h2>
                <p class="leading-relaxed">Ropa a la Medida, Asesoría Personalizada, Materiales de Alta Calidad, Ajustes y Alteraciones.</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center">Comprar ahora
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-wrap -mx-2">
              <div class="px-2 w-1/2">
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                  <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ asset('storage/img/gif.gif')}}">
                  <div class="text-center relative z-10 w-full">
                    <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Misión</h2>
                    <p class="leading-relaxed">En butterfly, nuestra misión es transformar la manera en que las personas experimentan la moda, ofreciendo prendas únicas y personalizadas que realzan la individualidad y estilo de cada cliente. Nos dedicamos a proporcionar un servicio excepcional a través de la confección a medida, utilizando materiales de la más alta calidad y una artesanía impecable. Nuestro objetivo es que cada cliente se sienta especial, elegante y seguro en su propia piel.</p>
                  </div>
                </div>
              </div>
              <div class="px-2 w-1/2">
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                  <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ asset('storage/img/gif.gif')}}">
                  <div class="text-center relative z-10 w-full">
                    <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Visión</h2>
                    <p class="leading-relaxed">Nuestra visión es ser la tienda líder en ropa a la medida, reconocida por la excelencia en diseño, innovación y servicio al cliente. Aspiramos a redefinir los estándares de la moda personalizada, convirtiéndonos en el referente global para quienes buscan autenticidad y perfección en su vestimenta. Queremos inspirar una cultura donde la moda sea una expresión auténtica del individuo, promoviendo la sostenibilidad y la responsabilidad en cada prenda que creamos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>