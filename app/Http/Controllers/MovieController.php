<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function getAllMovies()
    {
        $movies = Movie::with(['directors', 'actors', 'genres'])->get();

        return response()->json($movies);
    }

    public function getMovieById($id)
    {
        $movie = Movie::with(['directors', 'actors', 'genres'])->find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        return response()->json($movie);
    }

    public function getMoviesWithGenres()
    {
        $movies = Movie::with('genres')->get();

        return response()->json($movies);
    }

    public function getMoviesWithRatings()
    {
        $movies = Movie::with(['ratings.reviewer'])->get();

        return response()->json($movies);
    }
}
