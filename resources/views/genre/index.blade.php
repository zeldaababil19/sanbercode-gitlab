@extends('layout.master')

@section('content')
<a href="/genre/create" class="btn btn-primary my-2">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($genres as $key=>$value)
                    <tr>
                        <td><span class="btn btn-primary">{{$key + 1}}</span></th>
                        <td><span class="btn btn-primary">{{$value->nama}}</span></td>
                        <td>
                            <a href="/genre/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/genre/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection