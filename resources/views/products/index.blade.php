@extends('layouts.app')

@section('content')
<div class="container pb-3">
	<form id="sort-form" action="{{route('product.sort')}}" method="GET">
	<div class="row">
		
			<input type="hidden" name="name">
			<input type="hidden" name="value">
			
			<div class="col col-md-2">
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Сортировать цену <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><button type="button" class="btn btn-sort" data-name="price" data-type="asc">по возростанию</button></li>
				    <li><button type="button" class="btn btn-sort" data-name="price" data-type="desc">по убыванию</button></li>
				  </ul>
				</div>
			</div>
			<div class="col col-md-2">
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Сортировать название <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><button type="button" class="btn btn-sort" data-name="name" data-type="asc">по возростанию</button></li>
				    <li><button type="button" class="btn btn-sort" data-name="name" data-type="desc">по убыванию</button></li>
				  </ul>
				</div>
			</div>
		
	</div>
	</form>
</div>

<div class="container products">
	
		
			@include('products.grid')
		
	
</div>
@endsection



