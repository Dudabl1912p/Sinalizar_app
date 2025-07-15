<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blur shadow-sm">
    <div class="container px-4 position-relative">
        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('imagens/logo.png') }}" alt="Logo Sinalizar" height="40">
        </a>

        <!-- BOTÃO HAMBÚRGUER -->
        <div class="position-absolute top-0 end-0 mt-3 me-3 d-lg-none">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-end" id="menuPrincipal">
            <ul class="navbar-nav text-center d-flex gap-4">
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="{{ route('home') }}#SobreN">Sobre nós</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold text-dark" href="#" data-bs-toggle="dropdown">Categorias</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}#Servico">Serviços</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}#Videos">Vídeos</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}#Contato">Contato</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="{{ route('CatalogoF') }}">Catálogo</a></li>
            </ul>
        </div>
    </div>
</nav>