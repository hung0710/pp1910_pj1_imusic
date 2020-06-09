<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'title',
    ];

    protected function songs()
    {
        return $this->hasMany(Song::class, 'category_id');
    }

    protected function videos()
    {
        return $this->belongToMany(Video::class);
    }
    protected function playlist()
    {
        return $this->belongsToMany(Playlist::class);
    }
    //
}
