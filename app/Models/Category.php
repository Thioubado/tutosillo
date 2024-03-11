<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2024
 */

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
	use HasFactory;

	// public function films(): HasMany
	// {
	// 	return $this->hasMany(Film::class);
	// }

	// public function films(): BelongsToMany
	// {
	// 	return $this->belongsToMany(Film::class);
	// }

	protected $fillable = [
		'name',
		'slug',
	];

	protected $visible = ['name'];

	public function films():MorphToMany
	{
		return $this->morphToMany(Film::class, 'filmable');
	}

}
