@extends('layout')

@section('content')
<div class="special">
	<div class="container">
		<!-- <h3>Special Offers</h3> -->
		<div class="specia-top">
			<ul class="grid_2">
			@foreach($items as $item)
                <li>
                    <a href="details.html"><img src="/images/products/{{$item->product->pictures[0]->path}}" class="img-responsive" alt=""></a>
                    <div class="special-info grid_1 simpleCart_shelfItem">
                        <h5>{{$item->product->name}}</h5>
                        <div class="item_add"><span class="item_price"><h6>ONLY {{$item->price}}&euro;</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                    </div>
                </li>
			@endforeach
		<div class="clearfix"> </div>
	</ul>
		</div>
	</div>
</div>

@endsection