<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Playlist extends Model
{
    protected $table = 'playlists';
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'type',
        'view',
    ];

    protected function category()
    {
        return $this->belongsToMany(Category::class);
    }

    protected function users()
    {
        return $this->belongsTo(User::class);
    }

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
