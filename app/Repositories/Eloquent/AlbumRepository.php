<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\AlbumInterface;
use App\Models\Album;

class AlbumRepository extends BaseRepository implements AlbumInterface
{
    public function getModel()
    {
        return Album::class;
    }
}