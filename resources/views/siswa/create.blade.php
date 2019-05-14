@extends('admin.index')

@section('content')
    <h1>Tambah Siswa</h1>
    {!! Form::open(['action' => 'SiswaController@store', 'method' => 'POST']) !!}
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
        {!!Form::label('Select Course') !!}
        {!!Form::select('mapel[]',$mapel,null, ['multiple' => 'multiple', 'class' =>'form-control mapel'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Select Teacher') !!}
        {!!Form::select('guru[]',$guru,null, ['multiple' => 'multiple', 'class' =>'form-control guru'])!!}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
