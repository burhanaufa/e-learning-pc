@extends('admin.index')

@section('content')
    <h1>Edit Question</h1>
    {{Form::model($pertanyaan, array('route'=> array('pertanyaan.update',$pertanyaan->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('isi_pertanyaan', 'Update Question')}}
            {{Form::textArea('isi_pertanyaan',$pertanyaan->isi_pertanyaan, ['class' => 'form-control', 'placeholder'=>'isi pertanyaan'])}}
        </div>
        <div class="form-group">
            {{Form::label('materis_id', 'Id Mapel')}}
            {{Form::text('materis_id',$pertanyaan->materis_id, ['class' => 'form-control', 'placeholder'=>'id Materi'])}}
        </div>
        {{Form::hidden('method','PUT')}}
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
