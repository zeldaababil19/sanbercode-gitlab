<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'film';
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id', 'eps', 'rating'];
    
}