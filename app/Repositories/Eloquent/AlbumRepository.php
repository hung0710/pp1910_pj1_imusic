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

    public function addSong($id)
    {
        $songIds = $this->albumDetailModel->select('song_id')->where('album_id', $id)->get();

        return $this->songModel
            ->where('type', config('settings.audio'))
            ->whereNotIn('id', function ($query) use ($id) {
                $query->select('song_id')->from('album_details')->where('album_id', $id)->get();
            });
    }

    public function removeSongFromAlbum($albumDetailId)
    {
        return $this->albumDetailModel->destroy($albumDetailId);
    }

    public function createAlbumDetail($songId, $id)
    {
        $input = [
            'song_id' => $songId,
            'album_id' => $id,
        ];

        return $this->albumDetailModel->create($input);
    }
}