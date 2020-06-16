@extends('layouts.app')
@section('content')
<table class="table table-striped">
<tr>
    <th>id pegawai</th>
    <th>Nama</th>
    <th>Gender</th>
    <th>No HP</th>
    <th>Alamat</th>
</tr>
@foreach ($datas as $data)
<tr>
    <th>{{$data->id_pegawai}}</th>
    <th>{{$data->nama}}</th>
    <th>{{$data->jenis_kelamin}}</th>
    <th>{{$data->no_hp}}</th>
    <th>{{$data->alamat}}</th>
</tr>
@endforeach
</table>
@endsection