<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Repositories\Contracts\AlbumInterface;

class AlbumController extends Controller
{
    protected $albumRepository;

    public function __construct(AlbumInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }
    public function index()
    {
        $album = $this->albumRepository->getAll();

        return view('web.album.index', compact('album'));
    }

    public function songs($id)
    {
        $album = $this->albumRepository->find($id);
        
        return view('web.album.list_song', compact('album'));
    }
}