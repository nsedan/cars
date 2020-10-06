@extends('layouts.app')

@section('content')
<div class="mt-4">
    <p><b>Make: </b>{{ $car->make }}</p>
    <p><b>Model: </b>{{ $car->model }}</p>
    <p><b>Colour: </b>{{ $car->colour }}</p>
    <p><b>Top Speed: </b>{{ $car->top_speed }}</p>
</div>
<a class="btn btn-secondary mt-2" href="/" role="button">Back</a>
@endsection
