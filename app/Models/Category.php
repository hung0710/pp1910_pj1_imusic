<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'title','description'
    ];

    protected function songs()
    {
        return $this->belongToMany(Song::class);
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
