<?php


namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers;

class ProdutoController extends Controller
{

    public function index(){


        return view("produtosEstoque.index");
    }
    public function create(){


        return view('produtosEstoque.create');
    }
    public function store(Request $request){


        return redirect()->route('produtosEstoque.index');
    }


}
