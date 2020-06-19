<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
use App\Models\FavouriteList;
use App\Models\Category;
use App\Models\Album;
use App\Models\Artists;
use App\Models\Comment;

class Song extends Model
{
    protected $table = 'songs';
    protected $fillable = [
        'name',
        'singer',
        'url',
        'lyrics',
        'artists_id',
        'category_id',
        'view',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function albumDetail()
    {
        return $this->belongsTo(AlbumDetail::class);
    }
    
    public function favouriteList()
    {
        return $this->morphedByMany(FavouriteList::class, 'listable');
    }
    public function artists()
    {
        return $this->belongsTo(Artists::class);
    }

    //
}
