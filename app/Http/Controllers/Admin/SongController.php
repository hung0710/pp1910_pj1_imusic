<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\SongFormRequest;
use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\ArtistsInterface;
use Illuminate\Http\Request;
use App\Repositories\Contracts\SongInterface;
use App\Services\SongService;

class SongController extends Controller
{
    protected $songRepository;
    protected $songService;
    protected $artistsRepository;
    protected $categoryRepository;

    public function __construct(SongInterface $songRepository, 
    SongService $songService,
    ArtistsInterface $artistsRepository,
    CategoryInterface $categoryRepository)
    {
        $this->songRepository = $songRepository;
        $this->songService = $songService;
        $this->artistsRepository = $artistsRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $songs = $this->songRepository->getSong()->paginate(config('setting.list_track'));

        return view('admin.song.index', compact('songs'));
    }

    public function create()
    {
        $artistses = $this->artistsRepository->getAll();
        $categories = $this->categoryRepository->getAll();

        return view('admin.song.create', compact('categories','artistses') );
    }

    public function store(SongFormRequest $request)
    {
        $this->songRepository->createSong($request);

        return redirect('/admin/song')->with("success");
    }

    public function edit($id)
    {
        $artistses = $this->artistsRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $song = $this->songRepository->find($id);

        return view('admin.song.edit', compact('song','categories','artistses'));
    }

    public function update(Request $request, $id)
    {
        $this->songRepository->updateSong($request, $id);

        return redirect('/admin/song')->with('Update successful');
    }    

    public function destroy($id)
    {
        $this->songRepository->delete($id);

        return redirect('admin/song')->with("The song $id has been deleted!");
    }
}