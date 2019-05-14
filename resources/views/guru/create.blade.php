@extends('admin.index')

@section('content')
    <h1>Tambah Guru</h1>
    {!! Form::open(['action' => 'GuruController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','', ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email','', ['class' => 'form-control', 'placeholder'=>'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password','', ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
    <div class="form-group">
        {!!Form::label('mapels_id','Select Course') !!}
        {!!Form::text('mapels_id','', ['single' => 'single', 'class' =>'form-control mapel'])!!}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

