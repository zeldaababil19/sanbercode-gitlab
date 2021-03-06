@extends('layout.master')

@section('content')

        <form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="judul"><span class="badge badge-primary">Judul</span></label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{$film->judul}}" placeholder="Masukkan Title">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan"><span class="badge badge-primary">Ringkasan</span></label>
                <input type="text" class="form-control" name="ringkasan" id="ringkasan" value="{{$film->ringkasan}}" placeholder="Masukkan ringkasan">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun"><span class="badge badge-primary">Tahun</span></label>
                <input type="number" class="form-control" name="tahun" id="tahun" value="{{$film->tahun}}" aria-valuemin="{{$film->tahun}}" placeholder="Masukkan tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre"><span class="badge badge-primary">Genre</span></label>
                <select name="genre_id" id="form-control">
                <option value="">-</option>
                
                @foreach ($genre as $value)
                @if ($value->id == $film->genre_id)
                <option value="{{$value->id}}" selected>{{$value->nama}}</option>  
                    @else
                    <option value="{{$value->id}}" >{{$value->nama}}</option>
                    @endif
                @endforeach  
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster"><span class="badge badge-primary">Poster</span></label>
                <input type="file" class="form-control" name="poster" id="poster" value="{{$film->poster}}" placeholder="Masukkan poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

@endsection