<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

Interface ArtistsInterface extends RepositoryInterface
{
    public function getArtists();
    
    public function createArtists(Request $request);

    public function updateArtists(Request $request, $id);
    //
}