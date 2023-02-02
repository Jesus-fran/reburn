<header class="p-3 bg-dark text-white" style="z-index: 99">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-secondary">Reburn</a></li>
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
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-primary">Registrarse</a>
                </div>
            @endguest
        </div>
    </div>
</header>


<!--  Header Area Start -->
{{-- <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo"><img src="assets/images/Reburn_logo.png"></a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href="#features">Servicios</a></li>
                        <li class="scroll-to-section"><a href="#our-halls">Espacios</a></li>
                        <li class="scroll-to-section"><a href="#schedule">Horarios</a></li>
                        <li class="scroll-to-section"><a href="#trainers">Entrenadores</a></li>
                        <li class="scroll-to-section"><a href="#testimonials">Testimonios</a></li>
                        <li class="scroll-to-section"><a href="#price">Precios</a></li>
                        <li class="scroll-to-section"><a href="mockups.html">Mockups</a></li>
                        <li class="scroll-to-section"><a href="info.html">Desarrolladores</a></li>
                        <li class="scroll-to-section main-button"><a href="#contact-us">Contacto</a></li>


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header> --}}
<!-- Header Area End -->
