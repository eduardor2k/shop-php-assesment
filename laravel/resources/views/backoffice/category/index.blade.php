@extends('backoffice.layout')

@section('content')
    <h1>Welcome to Categories.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row"></th>
                <td>{{$category->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button class="btn btn-default" type="button">Add Category</button>
@endsection