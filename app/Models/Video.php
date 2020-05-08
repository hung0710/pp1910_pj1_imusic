<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
        'name',
        'singer_id',
        'lyrics',
        'category_id',
        'decription',
        'status',
        'view',
        'url',
    ];

    public function category()
    {
        return $this->belongToMany(Category::class);
    }

    public function favouriteList()
    {
        return $this->morphedByMany(FavouriteList::class, 'listable');
    }

    public function singers()
    {
        return $this->morphedByMany(Singer::class, 'listable');
    }
    //
}
