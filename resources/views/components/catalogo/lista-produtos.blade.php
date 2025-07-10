<p><strong>Total de produtos:</strong> {{ $produtos->total() }}</p>
@if ($produtos->count())
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($produtos as $produto)
    <div class="col">
        <div class="card h-100 shadow-sm d-flex flex-column">
            @if ($produto->imagem)
            <div class="card-img-container ratio-custom">
                <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}">
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
</div>

<div class="mt-4">
    {{ $produtos->withQueryString()->links() }}
</div>
@else
<p>Nenhum produto encontrado.</p>
@endif