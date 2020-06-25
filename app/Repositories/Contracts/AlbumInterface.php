<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

Interface AlbumInterface extends RepositoryInterface
{
    public function getAlbum();

    public function createAlbum(Request $request);

    public function updateAlbum(Request $request, $id);

    //
}
