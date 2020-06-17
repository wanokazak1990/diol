<?php
namespace App\Services;
use App\Models\Product;
use Session;

Class Cart 
{
	protected $items;

	public function initCart()
	{
		if(Session::get('cart'))
			$this->items = Session::get('cart');
		else $this->items = [];
	}

	public function saveItems()
	{
		Session::put('cart',$this->items);
	}

	public function getItems()
	{
		if(Session::get('cart'))
			return Session::get('cart');
		else return [];
	}

	public function getItemById($id)
	{
		$this->initCart();
		if(array_key_exists($id, $this->items)) 
			return $this->items[$id];
		else
			return 0;
	}

	public function push($id)
	{	
		$this->initCart();
		$product = Product::find($id);
		if(array_key_exists($id, $this->items)) :
			if($this->items[$id]['count']<$product->count) :
				$this->items[$id]['count']+=1;
			endif;
		else :		
			$this->items[$id] = [
				'id' => $product->id,
				'name' => $product->name,
				'price' => $product->price,
				'count' => 1
			];			
		endif;

		$this->saveItems();
	}

	public function take($id)
	{
		$this->initCart();
		if(array_key_exists($id, $this->items)) :
			if($this->items[$id]['count']>1) :
				$this->items[$id]['count']-=1;
				$this->saveItems();
			else :
				$this->remove($id);
			endif;
		endif;
	}

	public function remove($id)
	{
		if(array_key_exists($id, $this->items)) :
			unset($this->items[$id]);
			$this->saveItems();
		endif;
	}

	public function clear()
	{
		Session::put('cart','');
	}
}