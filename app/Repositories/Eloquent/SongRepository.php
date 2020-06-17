<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SongInterface;
use App\Models\Song;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class SongRepository extends BaseRepository implements SongInterface
{
    protected $songModel;

    public function __construct(Song $song)
    {
        $this->model = $song;
    }

    public function getModel()
    {
        return Song::class;
    }

    public function getSong()
    { 
        return $this->model->orderBy('name');
    }
    public function getSongOfArtists($id)
    {
        return $this->model->where('artists_id', $id)->where(config('settings.song'));
    }
    
    public function createSong(Request $request)
    {   
        $file = $request->file('url');
        $url = Helper::uploadFile($file, 'music');
        $data = $request->all();
        $data['url'] = $url;

        return $this->create($data);
    }

    public function updateSong(Request $request, $id)
    {
        $file = $request->file('url');
        $data['id'] = Song::find($id);
        $url = Helper::uploadFile($file, 'music');
        $data = $request->all();
        $data['url'] = $url;

        return $this->update($id, $data);
    }

}