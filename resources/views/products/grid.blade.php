<div class="row row-cols-1 row-cols-md-3 ">
@foreach ($products as $itemProduct)
<div class="col mb-4">
	<div class="card h-100">
		<img src="{{$itemProduct->picture}}" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">
				{{$itemProduct->name}}
			</h5>
			<p class="card-text">
				{{$itemProduct->description}}
			</p>

			<p class="card-text">
				В наличии: {{$itemProduct->count}}
			</p>

			<p class="card-text">
				<a href="{{route('product.show',['id'=>$itemProduct->id])}}">
					подробнее
				</a>
			</p>
		</div>

		<div class="card-footer text-center">
			<div class="row">
				<div class="col mb-6">
					{{$itemProduct->price}}
				</div>

				<div class="col mb-6">
					<button 
						class="btn btn-block btn-primary cart-toggle" 
						data-id="{{$itemProduct->id}}" 
						data-url="{{route('cart.add',['id'=>$itemProduct->id])}}"
					>
						В корзину
					</button>
				</div>
			</div>						
		</div>
	</div>
</div>		
@endforeach	
</div>	

<div class="row">
	<div class="col"> 
		{{ $products->links() }}
	</div>
</div>