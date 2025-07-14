<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoCatalogoController extends Controller
{
    public function index(Request $request)
    {
    $busca = trim($request->input('busca'));
    $categoria = trim($request->input('categoria'));

    $query = Produto::query();

    if (!empty($busca)) {
        $query->where('nome', 'like', '%' . $busca . '%');
    }

    if (!empty($categoria)) {
        $query->where('categoria', $categoria);
    }

    $produtos = $query->paginate(12);

    return view('Pages.CatalogoF', compact('produtos', 'busca', 'categoria'));
    }
}
