@extends('admin.index')

@section('content')
    <h1>Edit Subject</h1>
    {{Form::model($mapel, array('route'=> array('mapel.update',$mapel->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_mapel', 'Nama Mapel')}}
            {{Form::text('nama_mapel',$mapel->nama_mapel, ['class' => 'form-control', 'placeholder'=>'Nama Mapel'])}}
        </div>
        {{Form::hidden('method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
