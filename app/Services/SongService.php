<?php

namespace App\Services;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Repositories\Contracts\SongInterface;
use Illuminate\Support\Str;
use App\Traits\SongTrait;

class SongService
{
    use SongTrait;
    public function __construct(SongInterface $SongRepository)
    {
        $this->SongRepository = $SongRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['url'] =  $this->uploadSong($request, 'url'); 
        $this->SongRepository->create($data);
    }

    public function update(Request $request, $id)
    {   
        $data = $request->all();
        $data['id'] = Song::find($id);
        $data['url'] =  $this->uploadSong($request, 'url');
        $this->SongRepository->update($id, $data);
    }
}