@extends('main')
    @foreach ($hotel as $hotel)
    @foreach ($city as $city)
    @section('title'," $hotel->hotel - $city->city")

@sextion('container');

<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-3">Hello, world!</h1>
    </div>
    </div>
    <div>
@endsection
