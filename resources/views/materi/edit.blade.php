@extends('admin.index')

@section('content')
    <h1>Edit Materi</h1>
    {{Form::model($materi, array('route'=> array('materi.update',$materi->id),'method'=>'PUT'))}}
        <div class="form-group">
            {{Form::label('nama_materi', 'Name')}}
            {{Form::text('nama_materi',$materi->nama_materi, ['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('Konten Materi', 'Isi Konten')}}
                {{Form::textarea('konten_materi',$materi->konten_materi, ['class' => 'form-control', 'placeholder'=>'Konten Materi'])}}
        </div>
        <div class="form-group">
            {{Form::label('mapels_id', 'Id Mapel')}}
            {{Form::text('mapels_id',$materi->mapels_id, ['class' => 'form-control', 'placeholder'=>'id Mapel'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
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
