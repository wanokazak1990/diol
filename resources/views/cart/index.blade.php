<div class="modal-header">
    <h5 class="modal-title">Корзина</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
    @foreach($cart as $item)
    	<div class="row pb-2 d-flex align-items-center" data-id="{{$item['id']}}">
    		
    		<div class="col-4">
    			{{$item['name']}}
    		</div>

    		<div class="col-2">
    			{{$item['price']}}
    		</div>

    		<div class="col-1 count">
    			{{$item['count']}}
    		</div>

    		<div class="col-2 total-price">
    			{{$item['count']*$item['price']}}
    		</div>

    		<div class="col-3">
    			<div class="btn-group" role="group" style="width: 100%;">
	    			<button 
	    				class="btn btn-success cart-toggle" 
	    				data-id="{{$item['id']}}" 
	    				data-url="{{route('cart.add',['id'=>$item['id']])}}"
	    			>
	    				+
	    			</button>
	    		
	    			<button 
	    				class="btn btn-danger cart-toggle" 
	    				data-id="{{$item['id']}}" 
	    				data-url="{{route('cart.take', ['id'=>$item['id']])}}"
	    			>
	    				-
	    			</button>
    			</div>
    		</div>

    	</div>
    @endforeach
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>