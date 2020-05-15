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
