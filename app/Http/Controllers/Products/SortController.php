<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductSort;

class SortController extends Controller
{
	protected $sortService;

	public function __construct(ProductSort $service)
	{
		$this->sortService = $service;
	}

    public function index(Request $request)
    {
    	$products = $this->sortService->getSorted($request->only('name','value'));
    	return view('products.index')->with('products',$products);
    }
}
