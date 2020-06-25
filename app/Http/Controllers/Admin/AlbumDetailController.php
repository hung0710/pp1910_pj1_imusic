<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;
use App\Repositories\Contracts\SongInterface;
use App\Repositories\Contracts\AlbumInterface;
use App\Repositories\Contracts\AlbumDetailInterface;
use  App\Http\Requests\AlbumDetailFormRequest;
use App\Models\AlbumDetail;
use App\Models\Album;

class AlbumDetailController extends Controller
{
    protected $songRepository;
    protected $albumRepository;
    protected $albumDetailRepository;

    public function __construct(SongInterface $songRepository, 
    AlbumInterface $albumRepository,
    AlbumDetailInterface $albumDetailRepository)
    {
        $this->songRepository = $songRepository;
        $this->albumRepository = $albumRepository;
        $this->albumDetailRepository = $albumDetailRepository;
    }

    public function index()
    {
        $albumdetails = $this->albumDetailRepository->getAll();
        return view('admin.albumdetail.index', compact('albumdetails'));
    }

    public function create()
    {
        $songs = $this->songRepository->getAll();
        $albums = $this->albumRepository->getAll();

        return view('admin.albumdetail.create', compact('songs','albums'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->albumDetailRepository->create($data);

        return redirect('/admin/albumdetail')->with("success");
    }

    public function edit($id)
    {
        $albums = $this->albumRepository->getAll();
        $songs = $this->songRepository->getAll();
        $albumdetails = $this->albumDetailRepository->find($id);

        return view('admin.albumdetail.edit', compact('songs','albums','albumdetails'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->albumDetailRepository->update($id, $data);

        return redirect('/admin/albumdetail')->with('Update successful');
    }    

    public function destroy($id)
    {
        $this->albumDetailRepository->delete($id);

        return redirect('admin/albumdetail')->with("The $id has been deleted!");
    }
}