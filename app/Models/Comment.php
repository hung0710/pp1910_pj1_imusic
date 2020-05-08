<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'content',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }


    //
}
