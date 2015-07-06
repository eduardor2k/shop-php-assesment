@extends('layout')

@section('content')
<!-- content -->
<div class="container">
    <div class="women_main">
	<!-- start content -->
            <div class="row single">
                <div class="col-md-12 det">
                  <div class="single_left">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            @foreach($product->pictures as $picture)
                            <li><img src="/images/products/{{ e($picture->path) }}" class="img-responsive " alt=""/></li>
                            @endforeach
                        </ul>
                         <div class="clearfix"></div>
                  </div>
                  <div class="desc1 span_3_of_2">
                    <h3>{{ e($product->name) }}</h3>
                    <br />
                    <p>{{ e($product->short_description) }}</p>
                    <div class="price">
                        <span class="text">Price:</span>
                        <span class="price-new">{{ e($product->price) }}&euro;</span>
                    </div>

                    <div class="btn_form">
                        <a href="{{ route('cart.add', [ 'product_id' => $product->id ] ) }}">Add to Cart</a>
                    </div>

                 </div>
                <div class="clearfix"></div>
               </div>
                <div class="single-bottom1">
                    <h6>Details</h6>
                    <p class="prod-desc">{{ e($product->description) }}</p>
                </div>
           </div>
           <div class="clearfix"></div>
      </div>
	<!-- end content -->
    </div>
</div>

@endsection