@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row">

		<div class="col mb-4">
			<img src="{{$product->picture}}" style="width: 100%;">
		</div>

		<div class="col mb-8">
			<h5>{{$product->name}}</h5>
			<p>{{$product->description}}</p>
			<p>{{$product->price}}</p>
			<p>
				В наличии: {{$product->count}}
			</p>
			<button 
				class="btn btn-block btn-primary cart-toggle" 
				data-id="{{$product->id}}" 
				data-url="{{route('cart.add',['id'=>$product->id])}}"
			>
				В корзину
			</button>
		</div>

	</div>

</div>
@endsection



