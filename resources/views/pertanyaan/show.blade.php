@extends('admin.index')

@section('content')
    <a href="/pertanyaan" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Question</h1>
    <hr>
    <div>
        {!!$pertanyaan->isi_pertanyaan!!}
    </div>
    <hr>
    <small>Written on {{$pertanyaan->created_at}}</small>
    <hr>
@endsection
