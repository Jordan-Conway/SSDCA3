@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Looking for your next movie?
                </h1>
                <a 
                    href="/movie"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Click here for our top picks
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.bibguru.com/blog/img/write-review-movie-1400x700.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-center w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to find movies to watch?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                We're here to help.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                From Hollywood blockbusters to cult favourites, check out our reviews
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    
@endsection