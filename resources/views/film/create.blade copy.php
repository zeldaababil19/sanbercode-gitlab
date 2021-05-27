@extends('layout.master')

@section('title')
    Tambah film
@endsection

@section('content')

        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Title">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre">genre</label>
                <select name="genre_id" id="form-control">
                <option value="">-</option>
                @foreach ($genres as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach  
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

@endsection