@extends('admin.index')

@section('content')
<div class="container">
    <h1>Daftar Pivot Mapel dan Siswa</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>Mapel ID</td>
            <td>Siswa ID</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mapel -> $siswa   )
        <tr>
            <td>{{$mapel->mapel_id}}</td>
            <td>{{$siswa->siswa_id}}</td>
            <td><a href="{{ route('mapel_siswa.edit',$mapel->id, $siswa->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('mapel_siswa.destroy',$mapel->id, $siswa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('mapel_siswa.create')}}"class="btn btn-primary">Add Student</a>
    </tbody>
</table>
</div>
@endsection
