{{-- <header class="p-3 bg-dark text-white" style="z-index: 99">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('/') }}" class="nav-link px-2 text-secondary">Reburn</a></li>
                <li><a href="#schedule" class="nav-link px-2 text-white">Horarios</a></li>
                <li><a href="#trainers" class="nav-link px-2 text-white">Entrenadores</a></li>
                <li><a href="{{ route('contacto') }}" class="nav-link px-2 text-white">Contacto</a></li>
                <li><a href="{{ route('desarrolladores') }}" class="nav-link px-2 text-white">Desarrolladores</a></li>
            </ul>

            <form class="col-2 mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..."
                    aria-label="Search">
            </form>

            @auth
                {{ auth()->user()->name }}
                <div class="text-end px-2">
                     <a href="{{ route('cerrar-sesion') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('registrar') }}" class="btn btn-primary">Registrarse</a>
                </div>
            @endguest
        </div>
    </div>
</header> --}}

<div class="container-fluid bg-dark contenedor_nav" id="contenedor_nav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="barra_nav">
        <a class="navbar-brand" href="{{ route('/') }}">Reburn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#opciones"
            aria-controls="opciones" aria-expanded="false" aria-label="Toggle navigation" onclick="show_menu()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="opciones">
            <div class="container navbar_collapsed" id="navbar_collapsed">
                <div class="row">
                    <div class="navbar-nav">

                        <div class="col-md-auto offset-md-1 " id="opcion">
                            <a href="{{ route('horarios') }}" class="nav-link px-2 text-white">Horarios</a>
                        </div>
                        <div class="col-md-auto offset-md-1" id="opcion"><a href="{{ route('entrenadores') }}"
                                class="nav-link px-2 text-white">Entrenadores</a></div>
                        {{-- <div class="col-md-auto offset-md-1" id="opcion"><a class="nav-link" href="{{ url('/donar', []) }}">Donar</a></div> --}}
                        <div class="col-md-auto offset-md-1" id="opcion">
                            <a href="{{ route('precios') }}" class="nav-link px-2 text-white">Precios</a>
                        </div>
                        <div class="col-md-auto offset-md-1" id="opcion"><a href="{{ route('contacto') }}"
                                class="nav-link px-2 text-white">Contacto</a></div>
                        {{-- <div class="col-md-auto offset-md-1" id="opcion">
                            <a href="{{ route('desarrolladores') }}"
                                class="nav-link px-2 text-white">Desarrolladores</a>
                        </div> --}}
                        @auth

                            <div class="col-md-auto offset-md-1 text-light">
                                <a href="{{ route('contacto') }}" class="nav-link px-2 text-white"> <i
                                        class="bi bi-person-circle p-2"></i>{{ auth()->user()->username }}</a>
                            </div>
                            <div class="col-md-auto offset-md-1" id="opcion">
                                <a href="{{ route('cerrar-sesion') }}" class="btn btn-outline-light me-2">Logout</a>
                            </div>
                        @endauth

                        @guest
                            <div class="col-md-auto offset-md-1" id="opcion">
                                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                            </div>
                            <div class="col-md-auto" id="opcion">
                                <a href="{{ route('registrar') }}" class="btn btn-primary">Registrarse</a>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
