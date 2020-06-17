<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

Interface SongInterface extends RepositoryInterface
{
    public function getSong();

    public function getSongOfArtists($id);
    
    public function createSong(Request $request);

    public function updateSong(Request $request, $id);
    //
}