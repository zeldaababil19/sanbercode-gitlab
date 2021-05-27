<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar(){
        return view('page.form');
    }

    public function submit(Request $request){
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        return view('page.selamat', compact('firstname', 'lastname'));
    }
}