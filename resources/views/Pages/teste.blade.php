<h1>Teste de Produtos</h1>
<ul>
@foreach ($produtos as $produto)
    <li>{{ $produto->nome }}</li>
@endforeach
</ul>
