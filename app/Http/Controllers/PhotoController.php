<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Requests\ImagesRequest;
use App\Repositories\PhotosRepository;
use App\Repositories\PhotosRepositoryInterface;

class PhotoController extends Controller
{
	public function create(): View
	{
		return view('photo');
	}

	public function store(ImagesRequest $request, PhotosRepositoryInterface $photosRepository): View
    {
        $photosRepository->save($request->image);
         
        return view('photo_ok');
    }
}
