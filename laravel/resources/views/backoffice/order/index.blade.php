@extends('backoffice.layout')

@section('content')
    <h1>Welcome to Orders.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Order</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Amount</th>
                <th>Discount</th>
                <th>Products</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <th scope="row">#{{$item->id}}</th>
                <td>{{$item->first_name}} {{$item->last_name}}</td>
                <td>{{$item->street_name}} {{$item->city}} {{$item->zipcode}} ({{$item->country}})</td>
                <td>{{$item->amount}}&euro;</td>
                <td>{{$item->discount}}&euro;</td>
                <td>{{count($item->products)}}</td>
                <td>@if($item->status == 0) Pending @else Fulfilled @endif</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection