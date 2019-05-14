@extends('admin.index')

@section('content')
    <h1>Edit Guru</h1>
    {{Form::model($guru, array('route'=> array('guru.update',$guru->id),'method'=>'PATCH'))}}
        <div class="form-group">
            {{Form::label('nama_guru', 'Name')}}
            {{Form::text('nama_guru',$guru->name, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email',$guru->email, ['class' => 'form-control', 'placeholder'=>'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password',$guru->password, ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>
    <div class="form-group">
        {{Form::label('Mapels_id', 'Id Mapel')}}
        {{Form::text('mapels_id','', ['class' => 'form-control', 'placeholder'=>'Id Mapel'])}}
</div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
