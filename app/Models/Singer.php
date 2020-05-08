<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Singer extends Model
{
    protected $table = 'singers';
    protected $fillable = [
        'name',
        'decription',
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function songs()
    {
        return $this->morphToMany(Song::class, 'listable');
    }

    public function videos()
    {
        return $this->morphToMany(Video::class, 'listable');
    }
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //
}
