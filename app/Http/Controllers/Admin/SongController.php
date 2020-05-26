<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\SongFormRequest;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return view('admin.song.index', compact('songs'));
    }

    public function create()
    {
        return view('admin.song.create');
    }

    public function store(SongFormRequest $Request)
    {
        Song::create(['name' => $Request->get('name')]);
        return redirect('/admin/songs')->with("success","Create Product Successfully !");
    }

    
    public function edit(Request $request)
    {
        $album = Song::find($request->song_id);
        return view('admin.album.edit', compact('song'));
    }

    public function update(Request $request, $id)
    {
        $album = Song::whereid($id)->firstOrFail();
        $album->name = $request->get('name');
        $album->save();

        return redirect('/admin/songs');
    }    

    
    public function destroy($id)
    {
        $album = Song::whereid($id)->firstOrFail();
        $album->delete();
        return redirect('admin/songs')->with('status', 'The ticket '.$id.' has been deleted!');
    }
}
