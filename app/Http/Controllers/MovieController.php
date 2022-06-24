<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    public function films(){
        $movies = Movie::all();
        dump($movies);
        return view('pages.movies', compact('movies'));
    }
}
