@extends('layout.master')

@section('title')
    List Genre
@endsection

@section('content')
    <div>
    <h2> <span class="badges badge-primary">Edit genre {{$genres->id}} </span></h2>
    <br>
    <form action="/genre/{{$genres->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama"> <span class="badges badge-primary">Nama</span></label>
            <input type="text" class="form-control" name="nama" value="{{$genres->nama}}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    </div>

@endsection