<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
class HomeController extends Controller
{
    protected $artistsRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ArtistsInterface $artistsRepository)
    {
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
        $artists = $this->artistsRepository->getArtists()->paginate(config('setting.list_per_page'));
        return view('web.index',compact('artists'));
    }
    
    public function contact() 
    {
        return view('web.contact');
    }
}
