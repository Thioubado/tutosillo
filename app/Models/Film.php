<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Film extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'year',
        'description',
        // 'category_id',
    ];

    // Pour le API
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $visible = [
        'id',
        'title',
        'description',
        'actors',
        'categories',

    ];

    // public function category():BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function categories(): BelongsToMany
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    public function categories(): MorphToMany
    {
        return $this->morphedByMany(Category::class, 'filmable');
    }
    public function actors(): MorphToMany
    {
        return $this -> morphedByMany(Actor::class, 'filmable');
    }
}
