@php
use App\Models\Produto;

$agrupadoPorCategoria = Produto::all()->groupBy('categoria');
@endphp

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-3">Categorias</h5>

    <div class="accordion" id="accordionCategorias">
        @foreach ($agrupadoPorCategoria as $categoria => $produtos)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ Str::slug($categoria) }}">
                    <button class="accordion-button collapsed text-uppercase fw-semibold small" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-{{ Str::slug($categoria) }}"
                        aria-expanded="false" aria-controls="collapse-{{ Str::slug($categoria) }}">
                        {{ $categoria }}
                    </button>
                </h2>
                <div id="collapse-{{ Str::slug($categoria) }}" class="accordion-collapse collapse"
                    aria-labelledby="heading-{{ Str::slug($categoria) }}" data-bs-parent="#accordionCategorias">
                    <div class="accordion-body py-2 ps-4">
                        <ul class="list-unstyled mb-0">
                            @foreach ($produtos as $produto)
                                <li>
                                    <button type="button"
                                        class="btn btn-link text-decoration-none text-dark p-0 produto-item"
                                        data-produto="{{ $produto->nome }}">
                                        {{ $produto->nome }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-2">Saiba mais</h5>
    <a href="{{ asset('Catalogo/Catálogo_Sinalizar.pdf') }}" class="btn btn-dark w-100 mb-2" target="_blank">Catálogo.pdf</a>
</div>

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-2">Cotação</h5>
    <a href="{{ route('home') }}#Contato" class="btn btn-dark w-100">Contate-nos</a>
</div>