@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10">
    <div class="card">
    <div class="card-header">
        Input Data Pegawai
    </div>
    <div class="card-body">
    <form action="{{route('pegawai.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai</label>
            <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" placeholder="Id Pegawai">
        </div>
        <div class="form-group">
            <label for="Nama">Nama Pegawai</label>
            <input type="Text" name="nama" class="form-control" id="Nama" placeholder="Nama Pegawai">
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="" class="form-control">
                <option value="">--Pilih--</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomer HP</label>
            <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Kontak Pegawai">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat Pegawai</label>
            <input type="Text" name="alamat" class="form-control" id="Alamat" placeholder="Alamat Pegawai">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
    </div>
</div>

@endsection