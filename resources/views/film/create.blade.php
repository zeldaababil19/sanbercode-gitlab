@extends('layout.master')

@section('content')

        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
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
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

@endsection