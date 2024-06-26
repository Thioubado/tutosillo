<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null): View
    {
        $model = null;

        if($slug)
        {
            if(Route::currentRouteName() == 'films.category')
            {
                $model = new Category;
            }else{
                $model = new Actor;
            }

        }

        $query = $model ? $model::whereSlug($slug)->firstOrFail()->films() : Film::query();
        $films = $query->withTrashed()->oldest('title')->paginate(5);
        //$categories = Category::all();
        //return view('lessonfilms.index', compact('films', 'categories', 'slug'));
        //cette partie ci-dessous est pour la view composer
        return view('lessonfilms.index', compact('films', 'slug'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$categories = Category::all();
        //return view('lessonfilms.create', compact('categories'));
        //cette partie ci-dessous est pour la view composer
        return view('lessonfilms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $filmRequest) : RedirectResponse
    {
        //
        $film = Film::create($filmRequest->all());

        $film->categories()->attach($filmRequest->cats);
        $film->actors()->attach($filmRequest->acts);

        return redirect()->route('films.index')->with('info', 'Le film a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
        //$category = $film ->category->name;
        // eager loading
       // $film -> with('categories') -> get();
        return view('lessonfilms.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film) : View
    {
        //
        return view('lessonfilms.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $filmRequest, Film $film) : RedirectResponse
    {
        //
        $film->update($filmRequest->all());

        $film->categories()->sync($filmRequest->cats);
        $film->actors()->sync($filmRequest->acts);
        
        return redirect()->route('films.index')->with('info', 'Le film a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
        $film ->delete();
        return back()->with('info', 'Le film a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id) : RedirectResponse
    {
        Film::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

        return back()->with('info', 'Le film a bien été supprimé définitivement dans la base de données.');
    }

    public function restore($id) : RedirectResponse
    {
        Film::withTrashed()->whereId($id)->firstOrFail()->restore();

        return back()->with('info', 'Le film a bien été restauré.');
    }
}
