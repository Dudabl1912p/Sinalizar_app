<?php

use App\Http\Controllers\ProdutoCatalogoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Produto;

Route::get('/', function () {
    return view('Pages/index');
})->name('home');

Route::get('/Catalogo_construcao', function () {
    return view('Pages/Catalogo_construcao');
})->name('Catalogo_construcao');


Route::get('/CatalogoF', function (Request $request) {
    $query = Produto::query();

    if ($request->has('busca')) {
        $query->where('nome', 'like', '%' . $request->busca . '%');
    }

    $produto = $query->paginate(12);

    return view('Pages.CatalogoF', compact('produto'));
})->name('CatalogoF');

Route::get('/catalogo', [ProdutoCatalogoController::class, 'index'])->name('catalogo');

Route::get('/catalogo_Sinalizar', function () {
    $path = public_path('Catalogo/Catálogo_Sinalizar.pdf');
    return response()->file($path, [
        'Content-Type' => 'application/pdf',
    ]);
});