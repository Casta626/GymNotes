{{-- https://getbootstrap.com/docs/5.0/components/navbar/ --}}
<nav class="navbar navbar-expand-lg navbar-light bg-danger sticky-top">
  <div class="container-fluid" style="margin-left: 20px;margin-right: 20px;">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="/ejercicios" class="nav-link px-2 text-white">Ejercicios</a></li>
          <li><a href="/calendario" class="nav-link px-2 text-white">Calendario</a></li>
          <li><a href="/valor-alimentos" class="nav-link px-2 text-white">Valor Alimentos</a></li>
          <li><a href="/rm-max" class="nav-link px-2 text-white">Calculadora RM</a></li>
          <li><a href="/gestion-peso" class="nav-link px-2 text-white">Gestión Peso</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Musculos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/musculos#pecho">Pecho</a></li>
              <li><a class="dropdown-item" href="/musculos#espalda">Espalda</a></li>
              <li><a class="dropdown-item" href="/musculos#hombro">Hombro</a></li>
              <li><a class="dropdown-item" href="/musculos#abdomen">Abdomen</a></li>
              <li><a class="dropdown-item" href="/musculos#piernas">Piernas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li style="text-align: center">Brazos</li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/musculos#biceps">Biceps</a></li>
              <li><a class="dropdown-item" href="/musculos#triceps">Triceps</a></li>
              <li><a class="dropdown-item" href="/musculos#antebrazos">Antebrazos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
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
      </form>
    </div>
  </div>
</nav>