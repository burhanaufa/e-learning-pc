@extends('admin.index')

@section('content')
    <h1>Tambah Jawaban</h1>
    {!! Form::open(['action' => 'JawabanController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('isi_jawaban', 'Isi Jawaban')}}
            {{Form::textArea('isi_jawaban','', ['class' => 'form-control', 'placeholder'=>'Isi Jawaban'])}}
        </div>
        <div class="form-group">
            {!!Form::label('pertanyaans_id','No Pertanyaan') !!}
            {!!Form::text('pertanyaans_id','', ['single' => 'single', 'class' =>'form-control pertanyaan'])!!}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'isi_jawaban',{
    filebrowserImageBrowseUrl: '/laravel-filemanager',
    filebrowserImageUploadUrl: '/laravel-filemanager',
    filebrowserBrowseUrl: '/laravel-filemanager',
    filebrowserUploadUrl: '/laravel-filemanager'
    });
</script>
@endsection
