@extends('admin.index')

@section('content')
    <h1>Edit Pivot Guru dan Siswa</h1>
    {{Form::model($guru,$siswa, array('route'=> array('guru_siswa.update',$guru->guru_id,$siswa->siswa_id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('guru_id', 'Id Guru')}}
            {{Form::text('guru_id',$guru->guru_id, ['class' => 'form-control', 'placeholder'=>'Id Guru'])}}
        </div>
        <div class="form-group">
                {{Form::label('siswa_id', 'Id Siswa')}}
                {{Form::text('siswa_id',$siswa->siswa_id, ['class' => 'form-control', 'placeholder'=>'Id Siswa'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
