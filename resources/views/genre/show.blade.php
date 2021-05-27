@extends('layout.master')

@section('title')
    Show Genre ID ( {{$genre->id}} )
@endsection

@section('content')

<h4>Nama : {{$genre->nama}}</h4>
@endsection