<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    //
    public function create(): View
    {
        return view('infos');
    }

    public function store(Request $request)
    {
        return 'Le nom est ' .$request->input('nom');
    }
}
