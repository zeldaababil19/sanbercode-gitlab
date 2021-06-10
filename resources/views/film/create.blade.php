
@extends('layout.master')

@section('content')

        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group"><label for="judul"><span class="badge badge-primary">Judul</span></label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan"><span class="badge badge-primary">Ringkasan</span></label>
                <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun"><span class="badge badge-primary">Tahun</span></label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="eps"><span class="badge badge-primary">Eps</span></label>
                <input type="text" class="form-control" name="eps" id="eps" placeholder="Masukkan eps">
                @error('eps')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rating"><span class="badge badge-primary">Rating</span></label>
                <input type="number" class="form-control" name="rating" id="rating" placeholder="Masukkan rating">
                @error('rating')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre"><span class="badge badge-primary">Genre</span></label> <br>
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
                <label for="poster"><span class="badge badge-primary">Poster</span></label>
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

<script src="libs/jquery.min.js"></script>
		<script src="libs/jquery.multiple.select.js"></script>
		<link rel="stylesheet" href="libs/multiple-select.css"/>
		<script>
			$(document).ready(function(){
				$('.{{$value->id}}').multipleSelect();
			});
		</script>