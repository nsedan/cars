@extends('layouts.app')

@section('content')
<h4 class="m-2">CARS FORM</h4>
<form class="mt-4">
    <div class="form-group row">
        <label for="make" class="col-sm-2 col-form-label">Make</label>
        <div class="col-sm-10">
            <input class="form-control" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="model" class="col-sm-2 col-form-label">Model</label>
        <div class="col-sm-10">
            <input class="form-control" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="colour" class="col-sm-2 col-form-label">Colour</label>
        <div class="col-sm-10">
            <input class="form-control" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="top_speed" class="col-sm-2 col-form-label">Top Speed</label>
        <div class="col-sm-10">
            <input class="form-control" type="text">
        </div>
    </div>
    <button type="submit" class="btn btn-secondary btn-block">Submit</button>
</form>
@endsection
