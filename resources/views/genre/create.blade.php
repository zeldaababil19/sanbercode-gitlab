@extends('layout.master')

@section('title')
    Halaman Tambah Data-Genre
@endsection

@section('content')
<div>
      <form action="/genre" method="POST">
          @csrf
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
              @error('nama')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>

@endsection