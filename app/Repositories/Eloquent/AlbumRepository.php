<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\AlbumInterface;
use App\Models\Album;
use App\Helpers\Helper;
use App\Models\AlbumDetail;
use Illuminate\Http\Request;

class AlbumRepository extends BaseRepository implements AlbumInterface
{
    protected $albumModel;
    protected $albumDetailModel;

    public function __construct(Album $album, AlbumDetail $albumDetail)
    {
        $this->model = $album;
        $this->albumDetailModel = $albumDetail;
    }

    public function getModel()
    {
        return Album::class;
    }
    
    public function getAlbum()
    { 
        return $this->model->orderBy('name');
    }

    public function createAlbum(Request $request)
    {   
        $file = $request->file('url');
        $url = Helper::uploadFile($file, 'img');
        $data = $request->all();
        $data['url'] = $url;

        return $this->create($data);
    }

    public function updateAlbum(Request $request, $id)
    {
        $file = $request->file('url');
        $data['id'] = Album::find($id);
        $url = Helper::uploadFile($file, 'img');
        $data = $request->all();
        $data['url'] = $url;

        return $this->update($id, $data);
    }

}