<?php

namespace App\Http\Controllers\Api;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Collection;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Film::with('categories', 'actors') -> paginate(4);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : void
    {
        //
        Film::create($request -> all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
        return $film;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
        $film -> update($request -> all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
        $film -> delete();

    }
}
