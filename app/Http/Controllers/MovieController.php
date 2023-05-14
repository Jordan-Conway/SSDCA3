<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Laravel\Ui\Presets\React;

class MovieController extends Controller
{
    public function index(){
        return view('movie.index')
        ->with('movies', Movie::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'runTime' => 'required|integer',
            'releaseDate' => 'required|date'
        ]);

        Movie::create([
            'title' => $request->input('title'),
            'runTime' => $request->input('runTime'),
            'releaseDate' => $request->input('releaseDate')
        ]);

        return redirect('/movie')
            ->with('message', "Your movie has been added!");
    }
}
