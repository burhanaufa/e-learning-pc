@extends('admin.index')

@section('content')
    <h1>Tambah Pivot Mapel dan Siswa</h1>
    {!! Form::open(['action' => 'Mapel_SiswaController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('mapel_id', 'Id Mapel')}}
            {{Form::text('mapel_id','', ['class' => 'form-control', 'placeholder'=>'Id Mapel'])}}
        </div>
        <div class="form-group">
                {{Form::label('siswa_id', 'Id Siswa')}}
                {{Form::text('siswa_id','', ['class' => 'form-control', 'placeholder'=>'Id Siswa'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
