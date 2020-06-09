<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterface;

Interface ArtistsInterface extends RepositoryInterface
{
    public function getArtists();
    //
}