<header class="text-gray-600 body-font bg-gradient-to-b from-pink-400 to-slate-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img class="h-16" src="{{ asset('storage/img/logo.png')}}" alt="logo"/>
        
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('/')}}" class="mr-5 hover:text-gray-900">Inicio</a>
        <a href="{{ route('quienessomos')}}" class="mr-5 hover:text-gray-900">¿Quienes somos?</a>
        <a href="{{ route('tienda.index')}}" class="mr-5 hover:text-gray-900">Tienda</a>
      </nav>
      @auth
      <a href="{{ route('dashboard')}}">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Ir al panel
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
    </a>
      @else
      <a href="{{ route('login')}}">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Iniciar sesion
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
    </a>
    @endauth
    </div>
  </header>