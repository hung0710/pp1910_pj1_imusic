<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ArtistsInterface;
use App\Models\Artists;

class ArtistsRepository extends BaseRepository implements ArtistsInterface
{
    public function getModel()
    {
        return Artists::class;
    }
}