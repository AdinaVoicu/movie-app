<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\Artist;
use App\Models\Movie;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\DB;

// use MovieResource;

class MovieApiController extends Controller
{
	public function index()
	{

		$movies = Movie::with('artists')->visible()->status()->paginate(15);

		return MovieResource::collection($movies);
	}
}
