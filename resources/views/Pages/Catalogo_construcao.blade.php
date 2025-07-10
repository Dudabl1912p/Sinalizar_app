<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Em Breve</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/css/estilo.css', 'resources/js/mascara-telefone.js', 'resources/css/catalogo.css'])
    <style>
        .bg-blur {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blur shadow-sm">
        <div class="container px-4">
            <!-- LOGO -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('imagens/logo.png') }}" alt="Logo Sinalizar" height="40">
            </a>

            <!-- BOTÃO HAMBÚRGUER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

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


    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container text-center py-5" style="margin-top: 100px;">
        <div class="card p-5 shadow-lg border-0 rounded-4">
            <div class="icon mb-3">
                <i class="bi bi-tools" style="font-size: 4rem; color: #0d6efd;"></i>
            </div>
            <h2 class="fw-bold mb-3">Estamos preparando algo incrível para você!</h2>
            <p class="lead mb-4">
                Nosso <strong>catálogo exclusivo</strong> está sendo cuidadosamente montado para proporcionar a melhor experiência possível.
            </p>
            <p class="mb-4">
                Em breve, você poderá explorar nossos produtos com praticidade, detalhes completos e um visual moderno.
            </p>
            <a href="https://api.whatsapp.com/send?phone=5531996678200&text=Ol%C3%A1%2C%20sobre%20qual%20produto%20ou%20servi%C3%A7o%20voc%C3%AA%20deseja%20informa%C3%A7%C3%A3o%3F" target="_blank" class="btn btn-success btn-lg">
                <i class="bi bi-whatsapp me-2"></i> Fale conosco pelo WhatsApp
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>