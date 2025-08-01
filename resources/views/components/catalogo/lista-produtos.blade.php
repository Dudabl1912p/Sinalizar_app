@if ($produtos->count())
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4">

    {{-- Produtos dinâmicos --}}
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
                    data-img="{{ asset($produto->imagem) }}"
                    data-nome="{{ $produto->nome }}">
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

    {{-- Card fixo de aviso com imagem --}}
    <div class="col">
        <div class="card h-100 shadow-sm d-flex flex-column">
            <div class="card-img-container ratio-custom">
                <img src="{{ asset('produtos/Aviso.png') }}"
                    alt="Aviso"
                    class="img-fluid cursor-pointer"
                    loading="lazy"
                    data-bs-toggle="modal"
                    data-bs-target="#imagemModal"
                    data-img="{{ asset('produtos/Aviso.png') }}"
                    data-nome="Aviso Importante">
            </div>
            <div class="card-body text-center p-3 mt-auto">
                <p class="card-text mb-0 text-truncate" title="Aviso Importante">Aviso Importante</p>
            </div>
        </div>
    </div>
    <!-- Modal de imagem -->

    <div class="modal fade" id="imagemModal" tabindex="-1" aria-labelledby="imagemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content bg-white p-3 rounded shadow">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center p-3" style="min-height: 300px;">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    <img id="imagemModalExibida" src="" class="img-fluid rounded" alt="Imagem do produto">
                    <h5 id="modalNomeProduto" class="text-center mt-3"></h5>
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
    const imagemModal = document.getElementById('imagemModal');
    const imagemExibida = document.getElementById('imagemModalExibida');
    const nomeProduto = document.getElementById('modalNomeProduto');

    imagemModal.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        const imagem = trigger.getAttribute('data-img');
        const nome = trigger.getAttribute('data-nome');

        imagemExibida.src = imagem;
        nomeProduto.textContent = nome;
    });
</script>