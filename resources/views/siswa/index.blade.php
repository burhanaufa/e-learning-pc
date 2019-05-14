@extends('admin.index')

@section('content')
<div class="container">
    <h1>Daftar Siswa</h1>
<div class ="col-md-12">
        <td><a href="{{ route('siswa.create')}}"class="btn btn-primary">Tambah Siswa</a></td>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Siswa</td>
            <td>Email</td>
            <td>Mapel</td>
            <td>Guru</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @if(count($siswa) == 0)
            <tr>
                <td colspan="6" class="text-center">No Siswa Found</td>
            </tr>
        @else
        @foreach($siswa as $sis)
        <tr>
            <td>{{$sis->id}}</td>
            <td>{{$sis->name}}</td>
            <td>{{$sis->email}}</td>
            <td>
                @foreach($sis->mapel as $mapel)
                    <span> {!! $mapel->nama_mapel !!}</span>
                @endforeach
            </td>
            <td>
                @foreach($sis->guru as $guru)
                    <span> {!! $guru->name !!}</span>
                @endforeach
            </td>
            <td><a href="{{ route('siswa.edit',$sis->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('siswa.destroy',$sis->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
{!!$siswa->links()!!}
</div>
</div>
@endsection
