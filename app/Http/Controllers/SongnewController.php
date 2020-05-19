<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\Models\Song;

class SongnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $input = Song::orderBy('id','desc')->paginate(20);
       return view('web.songnew.index')->with('v_song', $input);
    }

    public function show($id)
    {
        $data = Song::findOrFail($id);
        $input = Song::orderBy('id','desc')->paginate(20); 
        return view('web.songnew.show')->with([
            'v_music' => $data,
            'v_track' => $input,
        ]);
    }

}
