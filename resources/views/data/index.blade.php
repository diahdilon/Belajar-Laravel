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
        <th scope="col">jumlah kejadian</th>
        <th scope="col">tahun</th>
        <th scope="col">aksi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row">1</th>
    <td>pakuniran</td>
    <td>probolinggo</td>
    <td>12</td>
    <td>2016</td>
    <td>
    <a href="" class="badge badge-secces ">edit</a>
    <a href="" class="badge badge-danger ">delete</a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div>
@endsection