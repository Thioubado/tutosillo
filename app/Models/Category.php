<?php

/**
 * (ɔ) Mo & GrCOTE7 - 2022-2024
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
	use HasFactory;

	public function film(): HasMany
	{
		return $this->hasMany(Film::class);
	}
}
