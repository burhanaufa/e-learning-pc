@extends('admin.index')

@section('content')
<div class="container">
    <h1>Pivot Guru dan Siswa</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <td>Guru ID</td>
            <td>Siswa ID</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
         {{-- @if(count($guru_siswa) == 0)
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
        @else --}}
        <tr>
            <td>
                @foreach($guru->siswa as $siswa)
                    <span> {!! $$siswa->nama_siswa !!}</span>
            </td>
             <td>
                @foreach($siswa->guru as $guru)
                    <span> {!! $mapel->nama_guru !!}</span>
                @endforeach
            </td>
            <td><a href="{{ route('guru_siswa.edit',$guru->id, $siswa->id)}}"class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('guru_siswa.destroy',$guru->id, $siswa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        {{-- @endif --}}
        <a href="{{ route('guru_siswa.create')}}"class="btn btn-primary">Add Pivot</a>
    </tbody>
</table>
</div>
@endsection
