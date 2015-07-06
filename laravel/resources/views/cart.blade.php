@extends('layout')

@section('content')
<script type="text/javascript">
    $(function() {
        $('.updateQuantity').change(function(){
            var rowid = $(this).attr('rowid');
            var items = $('option:selected',this).val();
            window.location = '/cart/update/'+rowid+'/'+items;
        });

        $('#coupon_form input[type="button"]').click(function(){
            var url = $('#coupon_form').attr('action');
            var value = $('#coupon_form input[type="text"]').val();
            window.location = url+value;
            console.log(url+value);
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
					    <h3><a href="{{ route('product', ['category' => $product->product->categories[0]->code, 'product' => str_slug($product->product->name) ]) }}">{{$product->id}}# {{e($product->name)}}</a></h3>
						<p>{{ e($product->product->short_description) }}</p>
						<ul class="qty">
							<li><p>Quantity :
							    <select class="updateQuantity" rowid="{{ $product->rowid }}">
							        @for($i = 0; $i < 21; $i++)
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
                 <span class="total1">@if($discount == 0)--- @else {{$discount}} &euro; @endif</span>
                 <div class="clearfix"></div>
             </div>
             <ul class="total_price">
               <li class="last_price"> <h4>TOTAL</h4></li>
               <li class="last_price"><span>{{ $total_with_discount }} &euro;</span></li>
               <div class="clearfix"> </div>
             </ul>

             <div class="clearfix"></div>
             <a class="order" href="{{ route('checkout.index') }}">Place Order</a>
             <div class="total-item">
                 <h3>Coupons</h3>
                 <div class="price-details">
                 @foreach($coupons as $coupon)
                    <span class="total1">{{e(strtoupper($coupon['name']))}} {{$coupon['discount']}}%:</span><span class="total1"><a href="{{route('coupon.remove',['coupon_code' => $coupon['name']])}}">Remove Coupon</a></span>
                 @endforeach
                 @if (count($coupons) > 0) <span class="total1" style="width: 100%">Only the coupon with the higher discount will be used</span>@endif
                 </div>
                 <div class="clearfix"> </div>
                 <br />
                 <form method="post" id="coupon_form" action="/coupon/add/">
                     <input type="text" name="coupon_code" placeholder="TEST10" style="width: 40%" />
                     <input type="button" class="cpns" value="Apply Coupons" />
                 </form>
             </div>
        </div>

		<div class="clearfix"> </div>
	 </div>
</div>

@endsection