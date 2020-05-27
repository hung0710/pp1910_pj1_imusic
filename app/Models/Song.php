<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Song extends Model
{
    protected $table = 'songs';
    protected $fillable = [
        'name',
        'singer',
        'url',
        'lyrics',
        'category_id',
        'artists',
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
        return $this->belongToMany(Category::class);
    }

    public function musicians()
    {
        return $this->belongsTo(Musician::class);
    }

    public function albums()
    {
        return $this->morphedByMany(Album::class, 'listable');
    }
    public function favouriteList()
    {
        return $this->morphedByMany(FavouriteList::class, 'listable');
    }
    public function playlist()
    {
        return $this->morphedByMany(Playlist::class, 'listable');
    }

    public function singers()
    {
        return $this->morphedByMany(Image::class, 'listable');
    }

    
    
    //
}
