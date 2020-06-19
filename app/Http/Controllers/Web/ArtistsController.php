<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artists;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Contracts\SongInterface;

class ArtistsController extends Controller
{
    protected $artistsRepository;
    protected $songRepository;

    public function __construct(ArtistsInterface $artistsRepository, 
    SongInterface $songRepository)
    {
        $this->artistsRepository = $artistsRepository;
        $this->songRepository = $songRepository;
    }
    public function index()
    {
        $artistses = $this->artistsRepository->getArtists()->paginate(config('setting.list_per_page'));

        return view('web.artists.index', compact('artistses'));
    }

    public function songs($id)
    {
        $songOfArtists = $this->songRepository
            ->getSongOfArtists($id)
            ->paginate(config('setting.list_song_artists'));
        $artistses = $this->artistsRepository->find($id);

        return view('web.artists.list_song', compact('artistses','songOfArtists'));
    }
}