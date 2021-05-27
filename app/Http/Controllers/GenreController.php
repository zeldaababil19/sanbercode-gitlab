<?php

namespace App\Http\Controllers;

use App\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
        public function index()
    {
        $genres = genre::all();
        return view('genre.index', compact('genres'));
    }
    
    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:genre',
        ]);
        $query = DB::table('genre')->insert([
            "nama" => $request["nama"],
        ]);
        return redirect('/genre');
    }

    public function show($id)
    {
        $genres = DB::table('genre')->where('id', $id)->first();
        return view('genre.show', compact('genres'));
    }

    public function edit($id)
    {
        $genres = DB::table('genre')->where('id', $id)->first();
        return view('genre.edit', compact('genres'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $query = DB::table('genre')
            ->where('id', $id)
            ->update([
            "nama" => $request["nama"],
        ]);
        return redirect('/genre');
        
    }
    
    public function destroy($id)
    {
        $query = DB::table('genre')->where('id', $id)->delete();
        return redirect('/genre');
    }
}