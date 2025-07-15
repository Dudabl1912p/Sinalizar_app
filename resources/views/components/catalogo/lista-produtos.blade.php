@if ($produtos->count())
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($produtos as $produto)
    <div class="col">
        <div class="card h-100 shadow-sm d-flex flex-column">
            @if ($produto->imagem)
            <div class="card-img-container ratio-custom">
                <img src="{{ asset($produto->imagem) }}"
                    alt="{{ $produto->nome }}"
                    class="img-fluid cursor-pointer"
                    loading="lazy"
                    data-bs-toggle="modal"
                    data-bs-target="#imagemModal"
                    data-img="{{ asset($produto->imagem) }}">
            </div>
            @else
            <div class="ratio ratio-4x3 bg-secondary"></div>
            @endif
            <div class="card-body text-center p-3 mt-auto">
                <p class="card-text mb-0 text-truncate" title="{{ $produto->nome }}">{{ $produto->nome }}</p>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Modal de imagem -->
    <!-- Modal de imagem menor -->
    <div class="modal fade" id="imagemModal" tabindex="-1" aria-labelledby="imagemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content bg-white p-3 rounded shadow">
                <div class="modal-body d-flex justify-content-center align-items-center p-3" style="min-height: 300px;">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    <img id="imagemModalExibida" src="" class="img-fluid rounded" alt="Imagem do produto">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $produtos->withQueryString()->links() }}
</div>
@else
<p>Nenhum produto encontrado.</p>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('imagemModal');
        const modalImg = document.getElementById('imagemModalExibida');

        modal.addEventListener('show.bs.modal', function(event) {
            const triggerImg = event.relatedTarget;
            const src = triggerImg.getAttribute('data-img');
            modalImg.src = src;
        });
    });
</script>