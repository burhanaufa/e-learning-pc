@extends('layouts.app')

@section('content')
<div class="container">
  <title>{{ config('app.name', 'Portal Pembelajaran SMA 1 Semarang') }}</title>
  <div>
    <h2>COURSES</h2>
  </div>
  <div class="row mt-3">
    @foreach($mapel as $mapel)
    <div class="col-sm-4 mt-2">
      <div class="card timbul" style="width: 18rem;">
        <img class="card-img-top" src="/img/{{$mapel->nama_mapel}}.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a class="brand " href="{{ URL::to('/course/' . $mapel->id) }}">
              {{$mapel->nama_mapel}}</h5>
        </div>
      </div>

    </div>
    @endforeach
  </div>
  @endsection
