@php
    $imagens = collect([
        [
            'img' => 'imagens/banner1.jpg',
            'link' => 'https://drive.google.com/drive/folders/1pbZt-s8AWSOUQcP67vYpIEwal1rEEzpA?usp=sharing',
            'titulo' => 'AV FLEMING, OURO PRETO (PAMPULHA), BELO HORIZONTE'
        ],
        [
            'img' => 'imagens/banner2.jpg',
            'link' => 'https://drive.google.com/drive/folders/1NaaFkVmwowu9qeQ9DKSQKtDA_xIRkS-Z?usp=drive_link',
            'titulo' => 'BAIRRO CASTELO(PAMPULHA), BELO HORIZONTE'
        ],
        [
            'img' => 'imagens/banner3.jpg',
            'link' => 'https://drive.google.com/drive/folders/16sVrXkFs9ajWUj_jOpkgAo8BuQS2h1GX?usp=sharing',
            'titulo' => 'AV RAJA GABÁGLIA, BELO HORIZONTE'
        ],
        [
            'img' => 'imagens/banner4.jpg',
            'link' => 'https://drive.google.com/drive/folders/1cPzI8VqyF2ie6H8oj2DbHgMM7_1TzACt?usp=sharing',
            'titulo' => 'BAIRRO PLANALTO(PAMPULHA), BELO HORIZONTE'
        ]
    ]);
@endphp

{{-- CARROSSEL: MOBILE (1 foto por slide) --}}
<div id="carouselImagensMobile" class="carousel slide d-block d-sm-none mb-5" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($imagens as $index => $img)
            <div class="carousel-item @if($index === 0) active @endif">
                <div class="mx-auto px-3">
                    <div class="img-container">
                        <a href="{{ $img['link'] }}" target="_blank">
                            <img src="{{ asset($img['img']) }}" alt="{{ $img['titulo'] }}">
                        </a>
                    </div>
                    <p class="mt-2 small">{{ $img['titulo'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagensMobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselImagensMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

{{-- CARROSSEL: TABLET (2 fotos por slide) --}}
<div id="carouselImagensTablet" class="carousel slide d-none d-sm-block d-md-none mb-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($imagens->chunk(2) as $i => $grupo)
            <div class="carousel-item @if($i === 0) active @endif">
                <div class="row justify-content-center px-3">
                    @foreach ($grupo as $img)
                        <div class="col-12 col-sm-6 px-2">
                            <div class="img-container">
                                <a href="{{ $img['link'] }}" target="_blank">
                                    <img src="{{ asset($img['img']) }}" alt="{{ $img['titulo'] }}">
                                </a>
                            </div>
                            <p class="mt-2 small">{{ $img['titulo'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagensTablet" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselImagensTablet" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


{{-- CARROSSEL: DESKTOP (3 fotos por slide) --}}
<div id="carouselImagensDesktop" class="carousel slide d-none d-md-block mb-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($imagens->chunk(2) as $i => $grupo)
            <div class="carousel-item @if($i === 0) active @endif">
                <div class="row justify-content-center px-2">
                    @foreach ($grupo as $img)
                        <div class="col-md-4 mb-3">
                            <div class="img-container">
                                <a href="{{ $img['link'] }}" target="_blank">
                                    <img src="{{ asset($img['img']) }}" alt="{{ $img['titulo'] }}">
                                </a>
                            </div>
                            <p class="mt-2 small">{{ $img['titulo'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagensDesktop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselImagensDesktop" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<style>
.carousel .img-container {
    width: 100%;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    border-radius: 12px;
}

.carousel img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease, filter 0.3s ease;
}

.carousel img:hover {
    transform: scale(1.02);
    filter: brightness(85%);
}

.carousel-inner {
    padding: 10px 0;
}

@media (max-width: 576px) {
    /* Celular — imagens menores */
    .carousel .img-container {
        aspect-ratio: 4 / 3;
        max-width: 90%; /* menor largura */
        margin: 0 auto;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    /* Tablet — imagens maiores */
    .carousel .img-container {
        aspect-ratio: 16 / 9;
        max-width: 95%; /* maior largura que no celular */
        margin: 0 auto;
    }
}
</style>

