@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Movies
        </h1>
    </div>
</div>

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/movie/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Add movie
        </a>
    </div>
@endif

@foreach ($movies as $movie)
    <div class="sm:grid grid-cols-1 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <p class="font-bold text-5xl pb-4">{{ $movie->title }} </p><br>
            Runtime: {{ $movie->runTime }} <br>
            Rating: {{ $movie->rating }} <br>
            Release Date: {{ $movie->releaseDate }}          
        </div>
    </div>
@endforeach

@endsection