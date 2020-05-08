<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = [
        'name','singer_id',
    ];

    protected function songs()
    {
        return $this->morphToMany(Song::class, 'lisable');
    }

    protected function singers()
    {
        return $this->belongsTo(Singer::class);
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //
}
