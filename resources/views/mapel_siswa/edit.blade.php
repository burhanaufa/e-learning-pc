@extends('admin.index')

@section('content')
    <h1>Edit Pivot Mapel dan Siswa</h1>
    {{Form::model($mapel,$siswa, array('route'=> array('mapel_siswa.update',$mapel->mapel_id,$siswa->siswa_id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('mapel_id', 'Id Mapel')}}
            {{Form::text('mapel_id',$mapel->mapel_id, ['class' => 'form-control', 'placeholder'=>'Id Mapel'])}}
        </div>
        <div class="form-group">
                {{Form::label('siswa_id', 'Id Siswa')}}
                {{Form::text('siswa_id',$siswa->siswa_id, ['class' => 'form-control', 'placeholder'=>'Id Siswa'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
