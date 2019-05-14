@extends('admin.index')

@section('content')
    <h1>Edit Siswa</h1>
    {{Form::model($siswa, array('route'=> array('siswa.update',$siswa->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name',$siswa->name, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email',$siswa->email, ['class' => 'form-control', 'placeholder'=>'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password',$siswa->pass, ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
    <div class="form-group">
            {!!Form::label('Select Course') !!}
            {!!Form::select('mapel[]',$mapel, ['multiple' => 'multiple', 'class' =>'form-control mapel'])!!}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

