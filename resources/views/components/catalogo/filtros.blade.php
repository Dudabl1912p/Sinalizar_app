@php
use Illuminate\Support\Facades\DB;

$agrupadoPorCategoria = DB::table('produto2s')
->select('categoria', DB::raw('COUNT(*) as total'))
->groupBy('categoria')
->orderBy('categoria')
->get();
@endphp

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-3">Categorias</h5>

    <div class="accordion" id="accordionCategorias">
        @foreach ($agrupadoPorCategoria as $categoriaObj)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading-{{ Str::slug($categoriaObj->categoria) }}">
                <button class="accordion-button collapsed text-uppercase fw-semibold small" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapse-{{ Str::slug($categoriaObj->categoria) }}"
                    aria-expanded="false" aria-controls="collapse-{{ Str::slug($categoriaObj->categoria) }}">
                    {{ $categoriaObj->categoria }}
                </button>
            </h2>
            <div id="collapse-{{ Str::slug($categoriaObj->categoria) }}" class="accordion-collapse collapse"
                aria-labelledby="heading-{{ Str::slug($categoriaObj->categoria) }}" data-bs-parent="#accordionCategorias">
                <div class="accordion-body py-2 ps-4">
                    <form method="GET" action="{{ route('CatalogoF') }}">
                    <input type="hidden" name="categoria" value="{{ $categoriaObj->categoria }}">
                    <button type="submit" class="btn btn-link text-decoration-none text-dark p-0 w-100 d-flex justify-content-between">
                        <span>Ver todos</span>
                        <span class="text-muted small">({{ $categoriaObj->total }})</span>
                    </button>
                </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-2">Saiba mais</h5>
    <a href="{{ url('/catalogo_Sinalizar') }}" class="btn btn-dark w-100 mb-2" target="_blank">Catálogo1.pdf</a>
    <a href="{{ url('/catalogo_Sinalizar2') }}" class="btn btn-dark w-100 mb-2" target="_blank">Catálogo2.pdf</a>
</div>

<div class="mb-4">
    <h5 class="border-start border-warning ps-2 mb-2">Cotação</h5>
    <a href="{{ route('home') }}#Contato" class="btn btn-dark w-100">Contate-nos</a>
</div>