@extends('layout.main');
@section('title', 'Daftar Data');
@section('container');
<div class="container">
<div class="row">
<div class="col-6">
    <h1 class="mt-3">Detail Data</h1>

    <a href="/longsors/create" class="btn btn-primary my-3">Tambah Data</a>

    <ul class="list-group">
    @foreach ($longsors as $longsors)
  <li class="list-group-item d-flex justify-content-between align-items-center">
   {{ $longsors->desa}}
   <a href="/longsors/{{ $longsors->id }}" class="badge badge-info">detail</a>
  </li>
  @endforeach
</ul>
</div>
</div>
<div>
@endsection