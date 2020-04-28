@extends('layout.main');
@section('title', 'Tambah Data');
@section('container');
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Tambah Data</h1>
      <form method="post" action="/longsors">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="desa">Desa</label>
          <input type="text" class="form-control" id="desa" placeholder="masukkan desa" name="desa" value="">
        </div>
        <div class="form-group">
          <label for="desa">Kecamatan</label>
          <input type="text" class="form-control" id="kecamatan" placeholder="masukkan kecamatan" name="kecamatan" value="">
        </div>
        <div class="form-group">
          <label for="desa">jumlah_kejadian</label>
          <input type="text" class="form-control" id="jumlah_kejadian" placeholder="masukkan jumlah_kejadian" name="jumlah_kejadian" value="">
        </div>
        <div class="form-group">
          <label for="desa">Tahun</label>
          <input type="text" class="form-control" id="tahun" placeholder="masukkan tahun" name="tahun" value="">
        </div>
        <button type="submit" class="btn btn-primary"> Tambah Data</button>
      </form>
    </div>
  </div>
</div>
    @endsection