@extends('layout.master')

@section('title')
    Halaman List film
@endsection

@section('content')

<a href="film/create" class="btn btn-primary btn-sm mb-3">Tambah Film</a>
<div class="row">
  
@foreach ($films as $value)

<div class="col-4">

<div class="card" style="width: 18rem;">
  <img src="{{asset('img/'.$value->poster)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$value->judul}}</h5>
    <p class="card-text">{{$value->ringkasan}}</p>
    <form action="/film/{{$value->id}}" method="POST">
    <a href="/film/{{$value->id}}" class="btn btn-info">Show</a>
    <a href="/film/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger my-1" value="Delete">
    </form>
  </div>
</div>
</div>

@endforeach
</div>
@endsection