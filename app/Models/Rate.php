<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Rate extends Model
{
    protected $table = 'rates';
    protected $fillable = [
        'point', 'user_id','song_id',
    ];

    public function users()
    {
        // a rate belong to a user
        return $this->belongsTo(User::class);
    }
    //
}
