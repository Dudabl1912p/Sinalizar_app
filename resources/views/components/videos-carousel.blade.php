<section class="videos py-5" id="Videos">
    <div class="container">
        <div class="text-start mb-5">
            <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Vídeos</h2>
        </div>

        {{-- Carrossel Único --}}
        <div id="carouselVideos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                {{-- Slide 1 --}}
                <div class="carousel-item active">
                    <div class="row justify-content-center g-4 flex-wrap">
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb1.jpg') }}">
                                    <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 1</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb2.jpg') }}">
                                    <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 2</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb3.jpg') }}">
                                    <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 3</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item">
                    <div class="row justify-content-center g-4 flex-wrap">
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb4.jpg') }}">
                                    <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 4</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb5.jpg') }}">
                                    <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 5</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 video-bloco">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none" loading="lazy" poster="{{ asset('thumbnails/thumb6.jpg') }}">
                                    <source src="{{ asset('videos/video6.mp4') }}" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video>
                            </div>
                            <p class="mt-2 small">Título do vídeo 6</p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Controles --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselVideos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</section>