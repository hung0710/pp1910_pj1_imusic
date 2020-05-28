<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\SongFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Contracts\SongInterface;
use App\Repositories\Eloquent\SongRepository;
use App\Services\SongService;

class SongController extends Controller
{
    protected $songRepository;
    protected $songService;

    public function __construct(SongInterface $songRepository, SongService $songService)
    {
        $this->songRepository = $songRepository;
        $this->songService = $songService;
    }

    public function index()
    {
        $songs = $this->songRepository->getAll();
        return view('admin.song.index', compact('songs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.song.create', compact('categories') );
    }

    public function store(SongFormRequest $request)
    {
        $this->songService->create($request);
        return redirect('/admin/song')->with("success");
    }

    public function edit($id)
    {
        $categories = Category::all();
        $song = $this->songRepository->find($id);
        return view('admin.song.edit', compact('song','categories',));
    }

    public function update(Request $request, $id)
    {
        $this->songService->update($request, $id);
        return redirect('/admin/song');
    }    

    public function destroy($id)
    {
        $this->songRepository->delete($id);
        return redirect('admin/song')->with('status', "The ticket $id has been deleted!");
    }
}