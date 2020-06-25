<?php

namespace App\Repositories\Eloquent;

use App\Models\AlbumDetail;
use App\Repositories\Contracts\AlbumDetailInterface;

class AlbumDetailRepository extends BaseRepository implements AlbumDetailInterface
{
    public function getModel()
    {
        return AlbumDetail::class;
    }
}