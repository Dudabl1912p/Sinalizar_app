@extends('layouts.app')

@section('title', 'Catálogo')

@push('styles')
@vite('resources/css/catalogoF.css')
@endpush

@section('content')
<div class="container py-4"> {{-- trocado de container-fluid para container --}}
    <div class="row gx-4"> {{-- adiciona espaçamento horizontal entre colunas --}}
        <!-- Barra lateral -->
        <div class="col-md-4 col-lg-3"> {{-- Largura maior para filtros --}}
            @include('components.catalogo.filtros')
        </div>

        <!-- Conteúdo principal -->
        <div class="col-md-8 col-lg-9">
            <h2 class="fw-bold mb-4">Nossa coleção de produtos e serviços</h2>

            <!-- Barra de pesquisa -->
            <form action="{{ route('CatalogoF') }}" method="GET" class="input-group mb-4">
                <input type="text" name="busca" class="form-control" placeholder="Busque por um item" value="{{ request('busca') }}">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            @if ($produtos->total() > 0)
            <p class="small text-muted mb-4">
                Mostrando {{ $produtos->firstItem() }}–{{ $produtos->lastItem() }} de {{ $produtos->total() }} itens
            </p>
            @else
            <p class="small text-muted mb-4">Nenhum item encontrado</p>
            @endif

            <!-- Lista de produtos -->
            @include('components.catalogo.lista-produtos')
        </div>
    </div>

</div>

<script>
    document.querySelectorAll('.produto-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const nomeProduto = this.dataset.produto;
            const inputBusca = document.querySelector('input[name="busca"]');
            if (inputBusca) {
                inputBusca.value = nomeProduto;
                inputBusca.form.submit();
            }
        });
    });
</script>
@endsection