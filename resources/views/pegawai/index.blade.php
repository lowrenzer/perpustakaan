@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10">
        <div>
            <a href="{{route ('pegawai.create')}}" class="btn-sm btn-danger">Tambah Pegawai</a>
        </div>
    <div class="card">
    <div class="card-header">
        Data Pegawai
    </div>
    <div class="card-body">
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
    </div>
</div>
    </div>
</div>

@endsection