<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class FavouriteList extends Model
{
    protected $table = 'favourite_list';
    protected $fillable = [
        'name','user_id',
    ];

    protected function users()
    {
        return $this->hasOne(user::class);
    }

    protected function songs()
    {
        return $this->morphToMany(song::class, 'lisable');
    }

    protected function videos()
    {
        return $this->morphToMany(video::class, 'lisable');
    }
    //
}
