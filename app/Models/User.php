<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
    ];
    //
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function favorite_list()
    {
        return $this->hasMany(FavoriteList::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
