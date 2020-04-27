@extends('layout.main');
@section('title', 'Daftar Data');
@section('container');
<div class="container">
<div class="row">
<div class="col-6">
    <h1 class="mt-3">Detail Data</h1>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $longsor->desa}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $longsor->kecamatan}}</h6>
    <p class="card-text">{{ $longsor->jumlah_kejadian}}</p>
    <p class="card-text">{{ $longsor->tahun}}</p>

    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="/longsors" class="card-link">kembali</a>
  </div>
</div>
</div>
</div>
<div>
@endsection