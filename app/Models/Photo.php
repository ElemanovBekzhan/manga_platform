<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPhoto
 */
class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Manga::class);
    }
}
