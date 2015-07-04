@extends('backoffice.layout')

@section('content')
    <h1>Welcome to the Inventory.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>price</th>
                <th>tax</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <th scope="row">#{{$item->id}}</th>
                <td>{{$item->product->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->tax}}</td>
                <td>{{$item->quantity}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button class="btn btn-default" type="button">Add Category</button>
@endsection