<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = [
        'name',
    ];

    protected function songs()
    {
        return $this->morphToMany(Song::class, 'lisable');
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //
}
