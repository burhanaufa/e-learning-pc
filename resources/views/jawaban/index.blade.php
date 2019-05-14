@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Jawaban</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Isi Jawaban</td>
            <td>No Pertanyaan</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($jawaban) == 0)
            <tr>
                <td colspan="5" class="text-center">No Jawaban Found</td>
            </tr>
        @else
        @foreach($jawaban as $jaw)
        <tr>
            <td>{{$jaw->id}}</td>
            <td>{!!$jaw->isi_jawaban!!}</td>
            <td>{{$jaw->pertanyaans_id}}</td>
            <td><a href="{{ route('jawaban.show',$jaw->id)}}"class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('jawaban.edit',$jaw->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('jawaban.destroy',$jaw->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
        <a href="{{ route('jawaban.create')}}"class="btn btn-primary">Add Answer</a>
    </tbody>
</table>
{!!$jawaban->links()!!}
</div>
@endsection
