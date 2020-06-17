<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use App\Models\Song;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Contracts\AlbumInterface;
use App\Repositories\Contracts\SongInterface;

class HomeController extends Controller
{
    protected $artistsRepository;
    protected $albumRepository;
    protected $songRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArtistsInterface $artistsRepository, 
    AlbumInterface $albumRepository,
    SongInterface $songRepository)
    {
        $this->albumRepository = $albumRepository;
        $this->artistsRepository = $artistsRepository;
        $this->songRepository = $songRepository;
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = $this->albumRepository->getAlbum()->paginate(config('setting.list_per_page'));
        $artistses = $this->artistsRepository->getArtists()->paginate(config('setting.list_per_page'));
        $songs = $this->songRepository->getSong()->paginate(config('setting.list_song_artists'));

        return view('web.index', compact('artistses','album','songs'));
    }
    
    public function contact() 
    {
        return view('web.contact');
    }

    public function search(Request $request) 
    {
        $artistses = Artists::where('name','like','%'.$request->search.'%')->get();
        $songs = Song::where('name','like','%'.$request->search.'%')->get();

        return view('web.layout.search', compact('artistses','songs'));
    }
}
