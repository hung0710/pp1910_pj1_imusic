<?php

namespace App\Services;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumInterface;
use Illuminate\Support\Str;
use App\Traits\FileTrait;
use App\Helpers\Helper;

class AlbumService
{
    use FileTrait;
    public function __construct(AlbumInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['url'] =  Helper::uploadImg($request, 'url'); 
        $this->albumRepository->create($data);
    }

    public function update(Request $request, $id)
    {   
        $data = $request->all();
        $data['id'] = Album::find($id);
        $data['url'] =  Helper::uploadImg($request, 'url');
        $this->albumRepository->update($id, $data);
    }
}