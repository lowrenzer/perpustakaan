{!! Form::model($user, ['route'=>['pegawai.update', $data->id], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::text('id_pegawai', null, ['class'=>'form-control','id'=>'id_pegawai']) !!}
    </div>
{!! Form::close() !!}