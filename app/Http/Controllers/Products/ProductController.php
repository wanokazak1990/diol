<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(10);

    	return view('products.index',compact('products'));
    }

    public function show(Request $request)
    {
    	$product = Product::findOrFail($request->id);

    	return view('products.show', compact('product'));
    }
}
