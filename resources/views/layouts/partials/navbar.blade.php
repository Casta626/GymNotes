<header class="p-3 bg-danger text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="/ejercicios" class="nav-link px-2 text-white">Ejercicios</a></li>
          <li><a href="/valor-alimentos" class="nav-link px-2 text-white">Valor Alimentos</a></li>
          {{-- <li><a href="/musculos" class="nav-link px-2 text-white">Musculos</a></li> --}}
    
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" href="/musculos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Musculos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/musculos#pecho">Pecho</a></li>
              <li><a class="dropdown-item" href="/musculos#espalda">Espalda</a></li>
              <li><a class="dropdown-item" href="/musculos#hombro">Hombro</a></li>
              <li><a class="dropdown-item" href="/musculos#abdomen">Abdomen</a></li>
              <li><a class="dropdown-item" href="/musculos#piernas">Piernas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li style="text-align: center">Brazos</li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/musculos#triceps">Triceps</a></li>
              <li><a class="dropdown-item" href="/musculos#brazos">Biceps</a></li>
              <li><a class="dropdown-item" href="/musculos#antebrazos">Antebrazos</a></li>
              
            </ul>
          </li>
          
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
  
        {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form> --}}
  
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-light me-2">Salir</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-light me-2">Iniciar sesión</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Registrarse</a>
          </div>
        @endguest
      </div>
    </div>
  </header>