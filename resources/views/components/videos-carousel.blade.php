@php
    $videos = collect([
        ['id' => 'dQw4w9WgXcQ', 'titulo' => 'Acompanhe nossas novidades através das nossas midias digitais'],
        ['id' => 'nBtJ21wIqlE', 'titulo' => 'Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.'],
        ['id' => 'u9Dg-g7t2l4', 'titulo' => 'Curta comente e compartilhe nossos conteudos nas midias sociais.'],
        ['id' => 'Wch3gJG2GJ4', 'titulo' => 'Acompanhe nossas novidades através das nossas midias digitais'],
        ['id' => 'ZbZSe6N_BXs', 'titulo' => 'Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.'],
        ['id' => 'XcQY6Ej2rKw', 'titulo' => 'Curta comente e compartilhe nossos conteudos nas midias sociais.'],
    ]);
@endphp

{{-- CARROSSEL: MOBILE (1 vídeo por slide) --}}
<div id="carouselVideosMobile" class="carousel slide d-block d-sm-none mb-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($videos as $index => $video)
            <div class="carousel-item @if($index === 0) active @endif">
                <div class="video-bloco mx-auto px-3">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/{{ $video['id'] }}"
                            title="{{ $video['titulo'] }}"
                            loading="lazy"
                            allowfullscreen
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                        </iframe>
                    </div>
                    <p class="mt-2 small">{{ $video['titulo'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

{{-- CARROSSEL: TABLET (2 vídeos por slide) --}}
<div id="carouselVideosTablet" class="carousel slide d-none d-sm-block d-md-none mb-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($videos->chunk(2) as $i => $grupo)
            <div class="carousel-item @if($i === 0) active @endif">
                <div class="d-flex justify-content-center gap-4 flex-wrap px-2">
                    @foreach ($grupo as $video)
                        <div class="video-bloco" style="width: 47%;">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/{{ $video['id'] }}"
                                    title="{{ $video['titulo'] }}"
                                    loading="lazy"
                                    allowfullscreen
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                                </iframe>
                            </div>
                            <p class="mt-2 small">{{ $video['titulo'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

{{-- CARROSSEL: DESKTOP (3 vídeos por slide) --}}
<div id="carouselVideosDesktop" class="carousel slide d-none d-md-block mb-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        @foreach ($videos->chunk(3) as $i => $grupo)
            <div class="carousel-item @if($i === 0) active @endif">
                <div class="row justify-content-center px-2">
                    @foreach ($grupo as $video)
                        <div class="col-md-4 mb-3 video-bloco">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/{{ $video['id'] }}"
                                    title="{{ $video['titulo'] }}"
                                    loading="lazy"
                                    allowfullscreen
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                                </iframe>
                            </div>
                            <p class="mt-2 small">{{ $video['titulo'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
