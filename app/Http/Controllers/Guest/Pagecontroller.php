<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class Pagecontroller extends Controller
{
    public function index(){

        $movies = Movie::All();
        return view('home', compact('movies'));
    }


}
