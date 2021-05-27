@extends('layout.master')

@section('title')
    Show Cast ID ( {{$cast->id}} )
@endsection

@section('content')

<h4>Nama : {{$cast->nama}}</h4>
<br>
<h4>Umur : {{$cast->umur}}</h4>
<br>
<h4>Bio  : {{$cast->bio}}</h4>
@endsection