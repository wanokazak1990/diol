<?php
namespace App\Services;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
Class ProductSort 
{
	public function getSorted($array = [])
	{		
		$query = Product::select('id','name','description','picture','price','count',DB::raw('if(count>0,1,0) as available'))
			->orderBy('available','desc');
		if(isset($array['name']) && isset($array['value'])) :
			$query->orderBy($array['name'],$array['value']);			
		endif;
		$products = $query->paginate(10)->appends(request()->only('page','name','value'));
		return $products;
	}
}