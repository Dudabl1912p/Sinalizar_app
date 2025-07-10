<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoCatalogoController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->input('busca');
        $categoria = $request->input('categoria');

        $produtos = Produto::when($busca, function ($query, $busca) {
            return $query->where('nome', 'like', '%' . $busca . '%');
        })
            ->when($categoria, function ($query, $categoria) {
                return $query->where('categoria', $categoria);
            })
            ->paginate(12);

        return view('Pages.CatalogoF', compact('produtos', 'busca', 'categoria'));
    }
}
