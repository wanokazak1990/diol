<?php
namespace App\Services;
use App\Models\Product;
use Illuminate\Http\Request;

Class ProductSort 
{
	public function getSorted($array = [])
	{		
		$query = Product::select('*');
		if(isset($array['name']) && isset($array['value'])) :
			$query->orderBy($array['name'],$array['value']);			
		endif;
		$products = $query->paginate(10)->appends(request()->only('page','name','value'));
		return $products;
	}
}