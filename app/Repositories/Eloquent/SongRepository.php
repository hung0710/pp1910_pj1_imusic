<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SongInterface;
use App\Models\Song;

class SongRepository extends BaseRepository implements SongInterface
{
    public function getModel()
    {
        return Song::class;
    }

}