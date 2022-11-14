<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Auth\Access\Gate;

// use MovieResource;

class MovieApiController extends Controller
{
	public function index()
	{

		$movies = Movie::with('artists')->visible()->status()->paginate();

		return MovieResource::collection($movies);
	}
	public function show(Movie $movie)
	{
		return new MovieResource($movie);
	}
	public function store(StoreMovieRequest $request)
	{
		$movie = Movie::create($request->validated());

		return new MovieResource($movie);
	}
	public function destroy(Movie $movie)
	{
		$movie->delete();

		return "Deleted";
	}
}
