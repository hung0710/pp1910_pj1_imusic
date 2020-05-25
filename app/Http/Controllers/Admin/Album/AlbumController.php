<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Http\Requests\AlbumFormRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('admin.album.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.album.create');
    }
    
    public function store(AlbumFormRequest $request)
    {
        Album::create(['name' => $request->get('name')]);
        return redirect('/admin/albums')->with("success","Create Product Successfully !");
    }

    

    public function edit(Request $request)
    {
        $album = Album::find($request->album_id);
        return view('admin.album.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $album = Album::whereid($id)->firstOrFail();
        $album->name = $request->get('name');
        $album->save();

        return redirect('/admin/albums');
    }    

    
    public function destroy($id)
    {
        $album = Album::whereid($id)->firstOrFail();
        $album->delete();
        return redirect('admin/albums')->with('status', 'The ticket '.$id.' has been deleted!');
    }
}