<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function products (Request $request)
    {
        $name = $request->search;
        $slug = $request->slug;
       Product::create([
        'name'=> $name,
        'slug'=>$slug
       ]);
        $data = '';
        foreach ($products as $product) {
            $data .= "
        <div class='col-3 mt-5'>
        <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'> $product->name</h5>
            <p class='card-text'>$product->slug</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>
        </div>
    </div>
    ";
    // dd($data);
        }
        // dd($data);
        return response($data);
    }
}
