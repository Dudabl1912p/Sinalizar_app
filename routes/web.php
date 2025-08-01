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


Route::get('/CatalogoF', [ProdutoCatalogoController::class, 'index'])->name('CatalogoF');

Route::get('/catalogo_Sinalizar', function () {
    $path = public_path('Catalogo/Catálogo_Sinalizar.pdf');
    return response()->file($path, [
        'Content-Type' => 'application/pdf',
    ]);
});

Route::get('/catalogo_Sinalizar2', function () {
    $path = public_path('Catalogo/Catalogo_Sinalizar2.pdf');
    return response()->file($path, [
        'Content-Type' => 'application/pdf',
    ]);
});
