<section class="videos py-5 d-flex align-items-center" style="min-height: 70vh;" id="Videos">
    <div class="container">
        <div class="text-start mb-5">
            <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Vídeos</h2>
        </div>

        @include('components.videos-carousel')

        {{-- Botões de redes sociais --}}
        <div class="d-flex justify-content-center gap-3 flex-wrap mt-3"> {{-- mt-3 diminui o espaçamento --}}
            <a href="https://www.instagram.com/sinalizarsinalizacao?igsh=NzI0eXB6NnB1c3V5" target="_blank"
                class="btn btn-outline-warning px-4 py-2 fw-bold d-flex align-items-center justify-content-center gap-2">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://www.youtube.com/seu_canal" target="_blank"
                class="btn btn-outline-danger px-4 py-2 fw-bold d-flex align-items-center justify-content-center gap-2">
                <i class="fab fa-youtube"></i> Youtube
            </a>
        </div>
    </div>
</section>


