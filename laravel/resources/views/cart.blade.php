@extends('layout')

@section('content')
<script type="text/javascript">
    $(function() {
        $('.updateQuantity').change(function(){
            var rowid = $(this).attr('rowid');
            var items = $('option:selected',this).val();
            window.location = '/cart/update/'+rowid+'/'+items;
        });
    });
</script>

<div class="container">
	<div class="check">

		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag ({{count($products)}})</h1>
			 @foreach($products as $product)
			 <div class="cart-header">
				 <div class="close1"><a href="{{ route('cart.remove',[ 'product_id' => $product->rowid ]) }}"><img src="/images/blank.gif" style="width: 100%; height: 100%"/></a></div>
				 <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                         <img src="/images/products/{{$product->product->pictures[0]->path}}" class="img-responsive" alt=""/>
                    </div>
			        <div class="cart-item-info">
					    <h3><a href="{{ route('product', ['category' => $product->product->categories[0]->code, 'product' => str_slug($product->product->name) ]) }}">{{$product->id}}# {{$product->name}}</a></h3>
						<p>{{ $product->product->short_description }}</p>
						<ul class="qty">
							<li><p>Quantity :
							    <select class="updateQuantity" rowid="{{ $product->rowid }}">
							        @for($i = 0; $i < 20; $i++)
                                        <option value="{{$i}}" @if($product->qty == $i)selected="selected"@endif>{{$i}}</option>
							        @endfor
							    </select></p></li>
						</ul>
					    <div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				  </div>
			 </div>
			 @endforeach
		</div>

		<div class="col-md-3 cart-total">
             <div class="price-details">
                 <h3>Price Details</h3>
                 <span>Total</span>
                 <span class="total1">{{ $total }} &euro;</span>
                 <span>Discount</span>
                 <span class="total1">---</span>
                 <div class="clearfix"></div>
             </div>
             <ul class="total_price">
               <li class="last_price"> <h4>TOTAL</h4></li>
               <li class="last_price"><span>{{ $total }} &euro;</span></li>
               <div class="clearfix"> </div>
             </ul>

             <div class="clearfix"></div>
             <a class="order" href="{{ route('checkout.index') }}">Place Order</a>
             <div class="total-item">
                 <h3>OPTIONS</h3>
                 <h4>COUPONS</h4>
                 <a class="cpns" href="#">Apply Coupons</a>
             </div>
        </div>

		<div class="clearfix"> </div>
	 </div>
</div>

@endsection