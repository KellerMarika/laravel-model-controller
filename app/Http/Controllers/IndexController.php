<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importo la classe creata 
use App\Models\Movie;


class IndexController extends Controller
{

    function index()
    {
        $navLinks = config("---DatabaseTemporaneoDB");
        $a = 10;
        $movies = Movie::all();

        return view('index', compact("a", "navLinks", "movies"));
    }

}