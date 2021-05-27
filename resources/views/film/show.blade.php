@extends('layout.master')

@section('title')
    Show Film ID ( {{$film->id}} )
@endsection

@section('content')

<img src="{{asset('img/'.$film->poster)}}" alt="">
<h2>Judul : {{$film->judul}}</h2>
<p>Tahun : {{$film->tahun}}</p>
<p>Ringkasan <br> {{$film->ringkasan}}</p>
<br>
<h6>Genre</h6>
@foreach ($genre as $value)
<span class="btn btn-primary btn-sm my-3">{{$value->nama}}</span>
@endforeach 
@endsection