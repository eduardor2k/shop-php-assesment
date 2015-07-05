@extends('...layout')

@section('content')

<form method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="container">
	<div class="check">

		<div class="col-md-9 cart-items">
		    @if(count($errors) > 0)
		        <div class="alert alert-danger" role="alert">
                @foreach($errors as $error)
                <p>{{$error}}</p>
                @endforeach
                </div>
            @endif

		       <h3>Your Details</h3>
               <!-- Form -->
               <div class="form-group col-md-6">
                 <label>First name</label>
                 <input type="text" name="first_name" @if(isset($post['first_name']))value="{{e($post['first_name'])}}"@endif class="form-control" placeholder="First Name">
               </div>
               <div class="form-group col-md-6">
                 <label>First name</label>
                 <input type="text" name="last_name" @if(isset($post['last_name']))value="{{e($post['last_name'])}}"@endif class="form-control" placeholder="Last name">
               </div>
               <div class="form-group col-md-6">
                 <label>Email address</label>
                 <input type="email" name="email" @if(isset($post['email']))value="{{e($post['email'])}}"@endif class="form-control" placeholder="Email">
               </div>
               <div class="form-group col-md-6">
                 <label>Telephone</label>
                 <input type="text" name="telephone" @if(isset($post['telephone']))value="{{e($post['telephone'])}}"@endif class="form-control" placeholder="Telephone">
               </div>
               <div class="form-group col-md-6">
                 <label>Street Name:</label>
                 <input type="text" name="street_name" @if(isset($post['street_name']))value="{{e($post['street_name'])}}"@endif class="form-control" placeholder="Street Name">
               </div>
               <div class="form-group col-md-6">
                 <label>City:</label>
                 <input type="text" name="city" @if(isset($post['city']))value="{{e($post['city'])}}"@endif class="form-control" placeholder="City">
               </div>
               <div class="form-group col-md-6">
                 <label>Country:</label>
                 <input type="text" name="country" @if(isset($post['country']))value="{{e($post['country'])}}"@endif class="form-control" placeholder="Country">
               </div>
               <div class="form-group col-md-6">
                 <label>ZIP/Postal Code:</label>
                 <input type="text" name="zipcode" @if(isset($post['zipcode']))value="{{e($post['zipcode'])}}"@endif class="form-control" placeholder="ZIP/Postal Code">
               </div>

                <!-- End Form -->
		</div>

		<div class="col-md-3 cart-total">
             <div class="price-details">
                 <h3>Price Details</h3>

                 @foreach($products as $product)
                 <span class="total1">{{$product->name}}</span><span class="total1">{{$product->qty}}x{{$product->price}} &euro;</span>
                 <div class="clearfix"></div>
                 @endforeach

                 <div class="clearfix"></div>
                 <span>Discount</span>
                 <span class="total1">---</span>
                 <div class="clearfix"></div>
             </div>
             <ul class="total_price">
               <li class="last_price"> <h4>TOTAL</h4></li>
               <li class="last_price"><span>{{ $total }} &euro;</span></li>
               <div class="clearfix"> </div>
             </ul>
             <input type="submit" class="order" value="Next" style="width: 100%;" />
             <div class="clearfix"></div>
        </div>

		<div class="clearfix"> </div>
	 </div>
</div>
</form>
@endsection