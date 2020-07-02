<?php

namespace App\Repositories\Eloquent;

use App\Models\AlbumDetail;
use App\Repositories\Contracts\AlbumDetailInterface;

class AlbumDetailRepository extends BaseRepository implements AlbumDetailInterface
{
    protected $albumDetailModel;

    public function __construct(AlbumDetail $albumDetail)
    {
        $this->model = $albumDetail;
    }

    public function getModel()
    {
        return AlbumDetail::class;
    }

    public function getAlbumDetail()
    { 
        return $this->model->orderBy('id');
    }
}