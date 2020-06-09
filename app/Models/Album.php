<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = [
        'name',
        'url',
        'view',
    ];

    protected function songs()
    {
        return $this->morphToMany(Song::class, 'lisable');
    }
    //
}
