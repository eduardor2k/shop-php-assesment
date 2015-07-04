@extends('backoffice.layout')

@section('content')
    <h1>Welcome to Products.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Visible</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $products)
            <tr>
                <th scope="row">{{$products->id}}</th>
                <td>{{$products->name}}</td>
                <td>{{$products->description}}</td>
                <td>Yes</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button class="btn btn-default" type="button">Add Product</button>
@endsection