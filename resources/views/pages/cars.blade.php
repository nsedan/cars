@extends('layouts.app')

@section('content')
<div class="row m-2">
    <div class="col-6">
        <h4 class="m-0">CARS TABLE</h4>
    </div>
    <div class="col-2 offset-4">
        <a class="btn btn-secondary btn-sm" href="#" role="button">New</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Colour</th>
            <th scope="col">Top Speed</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    @if(count($cars) > 0)
        @foreach($cars as $car)
            <tbody>
                <tr>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->colour }}</td>
                    <td>{{ $car->top_speed }}</td>
                    <td><a href="/form">View</a></td>
                    <td><a href="/form">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            </tbody>
        @endforeach
    @endif
</table>
@endsection
