<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        //$p = new Product;
        //$p->nome = "Coca-Cola";
        //$p->save();
        
        $products = Product::all();

        return view('products/index', ['products' => $products]);
    }
}
