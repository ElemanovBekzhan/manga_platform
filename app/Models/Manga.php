<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperManga
 */
class Manga extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded=[];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function photo(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Photo::class);
    }

    public function genre(): BelongsToMany
    {
        return $this->belongsToMany(
            Genre::class,
            'genre',
            'manga_id',
            'genre_id'
        );
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes', 'manga_id', 'user_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id','user_id');
    }



}
