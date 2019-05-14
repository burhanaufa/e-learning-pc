@extends('admin.index')

@section('content')
    <h1>Tambah Guru</h1>
    {!! Form::open(['action' => 'MapelController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama_mapel', 'Nama Mapel')}}
            {{Form::text('nama_mapel','', ['class' => 'form-control', 'placeholder'=>'Nama Mapel'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
