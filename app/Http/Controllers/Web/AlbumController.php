<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Repositories\Contracts\AlbumDetailInterface;
use App\Repositories\Contracts\AlbumInterface;
use App\Repositories\Contracts\SongInterface;

class AlbumController extends Controller
{
    protected $albumRepository;
    protected $albumDetailRepository;
    protected $songRepository;

    public function __construct(AlbumInterface $albumRepository,
    AlbumDetailInterface $albumDetailRepository,
    SongInterface $songRepository)
    {
        $this->albumRepository = $albumRepository;
        $this->albumDetailRepository = $albumDetailRepository;
        $this->songRepository = $songRepository;
    }
    public function index()
    {
        $albums = $this->albumRepository->getAlbum()->paginate(config('setting.list_per_page'));

        return view('web.album.index', compact('albums'));
    }

    public function songs($id)
    {
        $album = $this->albumRepository->find($id);
        $songs = $this->songRepository->getListAudioOfAlbum($id);

        return view('web.album.list_song', compact('album','songs'));
    }
}