<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'content',
        'song_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }


    //
}
