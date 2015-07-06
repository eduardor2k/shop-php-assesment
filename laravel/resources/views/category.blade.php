@extends('layout')

@section('content')

<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start content -->
	<div class="col-md-12 w_content">
		<div class="women">
			<a href="#"><h4>{{ $category->name }} - <span>{{count($products)}} items</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li>
		     			<div class="clear"></div>
		     </ul>
		     <div class="clearfix"></div>
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">

		    @foreach($products as $product)

                <div class="grid1_of_4">
                    <div class="content_box"><a href="{{ route('product', ['category' => $category->code, 'product' => str_slug($product->name),'product_id' => $product->id ]) }}">
                         <img src="/images/products/{{$product->pictures[0]->path}}" class="img-responsive" alt=""/>
                          </a>
                        <h4><a href="{{ route('product', ['category' => $category->code, 'product' => str_slug($product->name),'product_id' => $product->id ]) }}">{{ e($product->name) }}</a></h4>
                         <p>{{ e($product->short_description) }}</p>
                         <div class="grid_1 simpleCart_shelfItem">

                         <div class="item_add"><span class="item_price"><h6>ONLY {{ $product->price }}&euro;</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="{{ route('cart.add', [ 'product_id' => $product->id ] ) }}">add to cart</a></span></div>
                         </div>
                    </div>
                </div>

		    @endforeach

			<div class="clearfix"></div>
		</div>
		<!-- end grids_of_4 -->


	</div>
	<div class="clearfix"></div>

	<!-- end content -->
</div>
</div>

@endsection