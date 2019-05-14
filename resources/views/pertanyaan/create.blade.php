@extends('admin.index')

@section('content')
    <h1>Tambah Pertanyaan</h1>
    {!! Form::open(['action' => 'PertanyaanController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('isi_pertanyaan', 'Pertanyaan')}}
            {!!Form::textArea('isi_pertanyaan','', ['class' => 'form-control', 'placeholder'=>'Isi Pertanyaan'])!!}
        </div>
        <div class="form-group">
            {{Form::label('materis_id', 'Id Materi')}}
            {{Form::text('materis_id','', ['class' => 'form-control', 'placeholder'=>'id Materi'])}}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'isi_pertanyaan',{
    filebrowserImageBrowseUrl: '/laravel-filemanager',
    filebrowserImageUploadUrl: '/laravel-filemanager',
    filebrowserBrowseUrl: '/laravel-filemanager',
    filebrowserUploadUrl: '/laravel-filemanager'
    });
    </script>
@endsection
