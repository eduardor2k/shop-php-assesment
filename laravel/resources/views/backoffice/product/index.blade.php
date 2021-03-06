@extends('backoffice.layout')

@section('content')
    <h1>Welcome to Products.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Categories</th>
                <th>Visible</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $products)
            <tr>
                <th scope="row">{{$products->id}}</th>
                <td>{{$products->name}}</td>
                <td>{{$products->description}}</td>
                <td>
                @foreach ($products->categories as $category)
                    {{$category->name}}
                @endforeach
                </td>
                <td>Yes</td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$products->render()}}
    <button class="btn btn-default" type="button">Add Product</button>
@endsection