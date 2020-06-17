<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Cart;

class CartController extends Controller
{
	protected $cartService;

	public function __construct(Cart $cart)
	{
		$this->cartService = $cart;
	}

    public function add(Request $request)
    {
    	$this->cartService->push($request->id);
    	return response()->json([
    		'cart'=>$this->cartService->getItemById($request->id),
    	]); 
    }

    public function take(Request $request)
    {
    	$this->cartService->take($request->id);
    	return response()->json([
    		'cart'=>$this->cartService->getItemById($request->id),
    	]); 
    }

    public function delete(Request $request)
    {
		$this->cartService->clear();
    }

    public function index()
	{
		$cart = $this->cartService->getItems();
		return response()->json([
			'content'=> view('cart.index')->with('cart',$cart)->render()
		]);
	}
}
