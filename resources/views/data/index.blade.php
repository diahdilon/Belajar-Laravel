@extends('layout.main');
@section('title', 'Daftar Data');
@section('container');
<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-3">Daftar Data</h1>

        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">desa</th>
        <th scope="col">kecamatan</th>
        <th scope="col">jumlah_kejadian</th>
        <th scope="col">tahun</th>
        <th scope="col">aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $dt )
    <tr>
    <th scope="row">{{ $loop->iteration }}</th>
    <td>{{ $dt-> desa }}</td>
    <td>{{ $dt-> kecamatan }}</td>
    <td>{{ $dt-> jumlah_kejadian }}</td>
    <td>{{ $dt-> tahun }}</td>
    <td>
        <a href="" class="badge badge-secces ">edit</a>
        <a href="" class="badge badge-danger ">delete</a>
        </td>
    </tr>
 @endforeach
 </tbody>
 </table>
</div>
</div>
<div>
@endsection