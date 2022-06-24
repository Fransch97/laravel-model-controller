<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function chi_siamo(){
        return view('pages.chi_siamo');
    }

    public function info(){
        return view('pages.info');
    }

    public function films(){
        return view('pages.movies');
    }
}
