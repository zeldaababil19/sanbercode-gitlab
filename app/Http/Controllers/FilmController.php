<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\genre;
use App\Film;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = film::all();
        return view('film.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = genre::all();
        return view('film.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request ,[
            'judul' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'ringkasan' => 'required',
            'poster' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        $gambar = $request -> poster;
        $name_img = time(). ' - '. $gambar->getClientOriginalName();

        film::create([
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id,
            'poster'=> $name_img
        ]);

        $gambar -> move ('img', $name_img);
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::all()->where('id', $id)->first();
        $genre = Genre::all();
        return view('film.show', compact('film', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::all();
        $film= Film::findorfail($id);
        return view('film.edit', compact('film', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'ringkasan' => 'required',
            'poster' => 'mimes:jpeg,jpg,png,gif',
        ]);

        $film = Film::findorfail($id);

        if($request->has('poster')){
            $path = "/posts";
            File::delete($path . $film->poster);
            $gambar = $request->poster;
            $new_gambar = time(). '-'.$gambar->getClientOriginalName();
            $gambar->move('img', $new_gambar);
            $film_data = [
                'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id,
            'poster'=> $new_gambar
            ];
        }else{
            $film_data = [
                'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id
            ];
        }
        $film->update($film_data);

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findorfail($id);
        $film->delete();

        $path = "img/";
        File::delete($path . $film->poster);

        return redirect('/film');
    }
}