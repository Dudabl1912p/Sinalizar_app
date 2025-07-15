<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoCatalogoController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->filled('busca') ? trim($request->input('busca')) : null;
        $categoria = $request->filled('categoria') ? trim($request->input('categoria')) : null;

        $query = Produto::query();

        if ($busca) {
            $query->where('nome', 'like', '%' . $busca . '%');
        }

        if ($categoria) {
            $query->where('categoria', $categoria);
        }

        $produtos = $query->paginate(12)->appends($request->except('page'));

        return view('Pages.CatalogoF', compact('produtos', 'busca', 'categoria'));
    }
}
