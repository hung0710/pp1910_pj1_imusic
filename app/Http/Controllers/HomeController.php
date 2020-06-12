<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Contracts\AlbumInterface;

class HomeController extends Controller
{
    protected $artistsRepository;
    protected $albumRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArtistsInterface $artistsRepository, 
    AlbumInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
        $this->artistsRepository = $artistsRepository;
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
        $artists = $this->artistsRepository->getArtists()->paginate(config('setting.list_per_page'));

        return view('web.index', compact('artists','album'));
    }
    
    public function contact() 
    {
        return view('web.contact');
    }
}
