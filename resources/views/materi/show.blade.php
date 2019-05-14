@extends('admin.index')

@section('content')
    <a href="/materi" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Materi</h1>
    <div>
        {!!$materi->konten_materi!!}
    </div>
    <div>
        {!!$materi->mapels_id!!}
    </div>
@endsection


