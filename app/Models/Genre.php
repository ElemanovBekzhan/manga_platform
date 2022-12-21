<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperGenre
 */
class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $timestamps = false;

    public function manga(): HasMany
    {
       return $this->hasMany(Manga::class,);
    }
}
