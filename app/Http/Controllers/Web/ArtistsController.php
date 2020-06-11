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
        $artists = $this->artistsRepository->getAll();

        return view('web.artists.index', compact('artists'));
    }

    public function songs($id)
    {
        $songOfArtists = $this->songRepository
            ->getSongOfArtists($id)
            ->paginate(config('settings.list_per_page'));
        $artistses = $this->artistsRepository->find($id);

        return view('web.artists.list_song', compact('artistses','songOfArtists'));
    }
}