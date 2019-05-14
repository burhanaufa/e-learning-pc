@extends('admin.index')

@section('content')
<div class="container">
<h1>Daftar Guru</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Guru</td>
            <td>Email</td>
            <td>Mapel</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($guru) == 0)
            <tr>
                <td colspan="5" class="text-center">No Guru Found</td>
            </tr>
        @else
            @foreach($guru as $gu)
                <tr>
                    <td>{!!$gu->id!!}</td>
                    <td>{!!$gu->name!!}</td>
                    <td>{!!$gu->email!!}</td>
                    <td>{!!$gu->mapels_id!!}</td>
                <td><a href="{{ route('guru.edit',$gu->id)}}"class="btn btn-primary">Edit</a></td>
                <td>
                <form action="{{ route('siswa.destroy',$gu->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
        <a href="{{ route('guru.create')}}"class="btn btn-primary">Add Teacher</a>
    </tbody>
</table>
{!!$guru->links()!!}
</div>
@endsection
