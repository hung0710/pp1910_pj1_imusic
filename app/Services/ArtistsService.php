<?php

namespace App\Services;

use App\Models\Artists;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
use Illuminate\Support\Str;
use App\Traits\FileTrait;
use App\Helpers\Helper;

class ArtistsService
{
    use FileTrait;
    public function __construct(ArtistsInterface $artistsRepository)
    {
        $this->artistsRepository = $artistsRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['url'] =  Helper::uploadImg($request, 'url'); 
        $this->artistsRepository->create($data);
    }

    public function update(Request $request, $id)
    {   
        $data = $request->all();
        $data['id'] = Artists::find($id);
        $data['url'] = Helper::uploadImg($request, 'url');
        $this->artistsRepository->update($id, $data);
    }
}