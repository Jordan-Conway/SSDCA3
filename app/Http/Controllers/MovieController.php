<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

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
            'releaseDate' => 'required|date',
            #taken from https://stackoverflow.com/a/42577289
            'posterURL' => ['nullable', 'regex:/.(gif|jpe?g|tiff?|png|webp|bmp)$/i']
        ]);

        Movie::create([
            'title' => $request->input('title'),
            'runTime' => $request->input('runTime'),
            'releaseDate' => $request->input('releaseDate'),
            'posterURL' => $request->input('posterURL')
        ]);

        return redirect('/movie')
            ->with('message', "Your movie has been added!");
    }
}
