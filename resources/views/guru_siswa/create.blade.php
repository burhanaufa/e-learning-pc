@extends('admin.index')

@section('content')
    <h1>Tambah Pivot Guru dan Siswa</h1>
    {!! Form::open(['action' => 'Guru_SiswaController@store', 'method' => 'POST']) !!}
    <div class="form-group">
            {!!Form::label('Select Student') !!}
            {!!Form::text('siswa[]',$siswa,null, ['multiple' => 'multiple', 'class' =>'form-control Student'])!!}
        </div>
    <div class="form-group">
            {!!Form::label('Select Teacher') !!}
            {!!Form::select('guru[]',$guru,null, ['multiple' => 'multiple', 'class' =>'form-control Teacher'])!!}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
