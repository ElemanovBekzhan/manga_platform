<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperGenre
 */
class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $timestamps = false;

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Manga::class,'genre','genre_id','manga_id');
    }
}
