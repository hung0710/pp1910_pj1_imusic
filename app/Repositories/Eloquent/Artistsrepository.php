<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ArtistsInterface;
use App\Models\Artists;
use App\Helpers\Helper;
use Illuminate\Http\Request;

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

    public function createArtists(Request $request)
    {   
        $file = $request->file('url');
        $url = Helper::uploadFile($file, 'img');
        $data = $request->all();
        $data['url'] = $url;

        return $this->create($data);
    }

    public function updateArtists(Request $request, $id)
    {
        $file = $request->file('url');
        $data['id'] = Artists::find($id);
        $url = Helper::uploadFile($file, 'img');
        $data = $request->all();
        $data['url'] = $url;

        return $this->update($id, $data);
    }
}