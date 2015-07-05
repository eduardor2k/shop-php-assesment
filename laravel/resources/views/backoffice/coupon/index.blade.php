@extends('backoffice.layout')

@section('content')
    <h1>Welcome to the Inventory.</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>code</th>
                <th>discount</th>
                <th>enable</th>
                <th>expire</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <th scope="row">#{{$item->id}}</th>
                <td>{{$item->code}}</td>
                <td>{{$item->discount}}</td>
                <td>{{$item->enable}}</td>
                <td>{{$item->expire}}</td>
                <td>{{$item->status}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button class="btn btn-default" type="button">Add Coupon</button>
@endsection