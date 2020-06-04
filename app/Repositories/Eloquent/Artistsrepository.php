<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ArtistsInterface;
use App\Models\Artists;

class ArtistsRepository extends BaseRepository implements ArtistsInterface
{
    protected $artistsModel;

    public function __construct(Artists $artists)
    {
        $this->model = $artists;
    }
    public function getModel()
    {
        return Artists::class;
    }
    public function getArtists()
    { 
        return $this->model->orderBy('name');
    }
}