<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function home(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
