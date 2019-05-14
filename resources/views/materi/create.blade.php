@extends('admin.index')

@section('content')
    <h1>Tambah Materi</h1>
    {!! Form::open(['action' => 'MateriController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama_materi', 'Name')}}
            {{Form::text('nama_materi','', ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('Konten Materi', 'Isi Konten')}}
                {{Form::textarea('konten_materi','', ['class' => 'form-control', 'placeholder'=>'Konten Materi'])}}
        </div>
        <div class="form-group">
            {{Form::label('mapels_id','Select Id Course')}}
            {{Form::text('mapels_id','', ['single' => 'single', 'class' =>'form-control mapel'])}}
    </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'konten_materi',{
    filebrowserImageBrowseUrl: '/laravel-filemanager',
    filebrowserImageUploadUrl: '/laravel-filemanager',
    filebrowserBrowseUrl: '/laravel-filemanager',
    filebrowserUploadUrl: '/laravel-filemanager'
});
</script>
@endsection

