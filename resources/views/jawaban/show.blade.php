@extends('admin.index')

@section('content')
    <a href="/jawaban" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Answers</h1>
    <hr>
    <div>
        {!!$jawaban->isi_jawaban!!}
    </div>
    <hr>
    <small>Written on {{$jawaban->created_at}}</small>
    <hr>
@endsection
