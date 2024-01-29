<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {

        $movies = Movie::all();

        // dd($movie);

        return view('welcome', compact('movies'));
    }

    public function show($id)
    {
        return "Dettaglio pagina di id: {$id}";
    }
}
