<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Song;
use App\Repositories\Contracts\SongInterface;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Contracts\CategoryInterface;

class SongnewController extends Controller
{   
    protected $artistsRepository;
    protected $songRepository;
    protected $categoryRepository;

    public function __construct(ArtistsInterface $artistsRepository, 
    SongInterface $songRepository,
    CategoryInterface $categoryRepository)
    {
        $this->artistsRepository = $artistsRepository;
        $this->songRepository = $songRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = $this->songRepository->getSong()->paginate(config('setting.list_song'));

        return view('web.songnew.index', compact('songs'));
    }

    public function show($id)
    {
        $songs = $this->songRepository->find($id);
        $track = $this->songRepository->getSong()->paginate(config('setting.list_track'));
        return view('web.songnew.show', compact('songs','track'));
    }

}
