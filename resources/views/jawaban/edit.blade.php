@extends('admin.index')

@section('content')
    <h1>Edit Answers</h1>
    {{Form::model($jawaban, array('route'=> array('jawaban.update',$jawaban->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('isi_jawaban', 'Isi Jawaban')}}
            {{Form::textArea('isi_jawaban',$jawaban->isi_jawaban, ['class' => 'form-control', 'placeholder'=>'isi jawaban'])}}
        </div>
        <div class="form-group">
            {{Form::label('pertanyaans_id', 'NO pertanyaan')}}
            {{Form::text('pertanyaans_id',$jawaban->pertanyaans_id, ['class' => 'form-control', 'placeholder'=>'No pertanyaan'])}}
        </div>
        {{Form::hidden('method','PUT')}}
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
