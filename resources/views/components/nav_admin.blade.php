<header class="text-gray-600 body-font bg-gradient-to-b from-pink-400 to-slate-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img class="h-16" src="{{ asset('storage/img/logo.png')}}" alt="logo"/>
        
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        @role('Admin')
          <a href="{{ route('login')}}" class="mr-5 hover:text-gray-900">Inicio</a>
          <a href="{{ route('Productos.index')}}" class="mr-5 hover:text-gray-900">Productos</a>
          <a href="{{ route('mensaje.index')}}" class="mr-5 hover:text-gray-900">mensajes</a>
          <a href="{{ route('compra.index')}}" class="mr-5 hover:text-gray-900">pedidos</a>
          <a href="{{ route('categoria.index')}}" class="mr-5 hover:text-gray-900">Categorias</a>
          @auth
          <a class="mr-5 hover:text-gray-900" href="{{ route('/')}}">
              Ir a la pagina web
          </a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Cerrar sesion
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </button>
          </form>
          
        @else
        <a href="{{ route('login')}}">
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Iniciar sesion
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
      </a>
        @endauth
        @endrole
        @role('User')
          <a href="{{ route('compra.index')}}" class="mr-5 hover:text-gray-900">pedidos</a>
        </nav>
        @auth
          <a class="mr-5 hover:text-gray-900" href="{{ route('/')}}">
              Ir a la pagina web
          </a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Cerrar sesion
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </button>
          </form>
        @else
        <a href="{{ route('login')}}">
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Iniciar sesion
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
      </a>
        @endauth
      @endrole
    </div>
  </header>