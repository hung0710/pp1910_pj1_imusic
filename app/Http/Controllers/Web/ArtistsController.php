<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artists;
use App\Repositories\Contracts\ArtistsInterface;

class ArtistsController extends Controller
{
    protected $artistsRepository;
    protected $artistsService;

    public function __construct(ArtistsInterface $artistsRepository)
    {
        $this->artistsRepository = $artistsRepository;
    }
    public function index()
    {
        $artists = $this->artistsRepository->getall();
        return view('web.artists.index',compact('artists'));
    }

    public function songs($id)
    {
        $artistses = $this->artistsRepository->find($id);
        return view('web.artists.list_song',compact('artistses'));
    }
}