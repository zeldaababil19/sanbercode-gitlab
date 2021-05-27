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
@if ($value->id == $film->genre_id)
<span class="btn btn-primary btn-sm my-3" value="{{$value->id}}">{{$value->nama}}</span>
                    @else
                    {{-- <span class="btn btn-secondary btn-sm my-3" value="{{$value->id}}">{{$value->nama}}</span> --}}
                    @endif
@endforeach 
@endsection