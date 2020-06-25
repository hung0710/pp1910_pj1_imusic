<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Http\Requests\AlbumFormRequest;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumInterface;
use App\Repositories\Contracts\SongInterface;

class AlbumController extends Controller
{
    protected $albumRepository;
    protected $songRepository;

    public function __construct(AlbumInterface $albumRepository,
    SongInterface $songRepository)
    {
        $this->albumRepository = $albumRepository;
        $this->songRepository = $songRepository;
    }

    public function index()
    {
        $albums = $this->albumRepository->getAll();

        return view('admin.album.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.album.create');
    }
    
    public function store(Request $request)
    {
        $this->albumRepository->createAlbum($request);

        return redirect('/admin/album')->with('Create successful album');
    }

    public function edit($id)
    {
        $album = $this->albumRepository->find($id);

        return view('admin.album.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $this->albumRepository->updateAlbum($request, $id);

        return redirect('/admin/album')->with('Update successful');;
    }    

    public function destroy($id)
    {
        $this->albumRepository->delete($id);
        
        return redirect('admin/album')->with("The album $id has been deleted!");
    }

}