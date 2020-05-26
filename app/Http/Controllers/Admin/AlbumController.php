<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Http\Requests\AlbumFormRequest;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumInterface;

class AlbumController extends Controller
{

    protected $AlbumRepository;

    public function __construct(AlbumInterface $AlbumRepository)
    {
        $this->AlbumRepository = $AlbumRepository;
    }

    
    public function index(){
        $albums = $this->AlbumRepository->getAll();
        return view('admin.album.index', compact('albums'));
    }


    public function create()
    {
        return view('admin.album.create');
    }
    

    public function store(AlbumFormRequest $request)
    {
        $data = $request->all();
        $this->AlbumRepository->create($data);;
        return redirect('/admin/albums')->with("success","Create Product Successfully !");
    }


    public function edit(Request $request)
    {
        $album = Album::find($request->album_id);
        return view('admin.album.edit', compact('album'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->AlbumRepository->update($id, $data);
        return redirect('/admin/albums');
    }    

    
    public function destroy($id)
    {
        $this->AlbumRepository->delete($id);
        return redirect('admin/albums')->with('status', 'The ticket '.$id.' has been deleted!');
    }
}