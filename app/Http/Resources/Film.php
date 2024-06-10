<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Film as FilmResource;

class Film extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'title' => $this->title,
            'year' => $this->year,
            'description' => str() -> words($this->description, 10),
            'categories' => $this->categories,
            'actors' => $this->actors,
        ];
    }

    public function show(Film $film) : FilmResource
    {
        return new FilmResource($film);
    }
}
