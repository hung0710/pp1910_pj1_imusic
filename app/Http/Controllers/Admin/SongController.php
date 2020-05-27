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

    protected $SongRepository;
    protected $SongService;

    public function __construct(SongInterface $SongRepository, SongService $SongService)
    {
        $this->SongRepository = $SongRepository;
        $this->SongService = $SongService;

    }

    public function index()
    {
        $songs = $this->SongRepository->getAll();
        return view('admin.song.index', compact('songs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.song.create', compact('categories') );
    }

    public function store(SongFormRequest $request)
    {
        $this->SongService->create($request);
        return redirect('/admin/songs')->with("success","Create Product Successfully !");
    }

    public function edit($id)
    {
        $categories = Category::all();
        $song = $this->SongRepository->find($id);
        return view('admin.song.edit', compact('song','categories',));
    }

    public function update(Request $request, $id)
    {
        $this->SongService->update($request, $id);
        return redirect('/admin/songs');
    }    

    public function destroy($id)
    {
        $this->SongRepository->delete($id);
        return redirect('admin/songs')->with('status', 'The ticket '.$id.' has been deleted!');
    }
}
