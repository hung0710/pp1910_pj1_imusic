<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistsFormRequest;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Eloquent\ArtistsRepository;

class ArtistsController extends Controller
{

    protected $artistsRepository;

    public function __construct(ArtistsInterface $artistsRepository)
    {
        $this->artistsRepository = $artistsRepository;
    }

    public function index()
    {
        $artistses = $this->artistsRepository->getArtists()->paginate(config('setting.list_track'));

        return view('admin.artists.index', compact('artistses'));
    }

    public function create()
    {
        return view('admin.artists.create' );
    }

    public function store(ArtistsFormRequest $request)
    {
        $this->artistsRepository->createArtists($request);

        return redirect('/admin/artists')->with("success");
    }

    public function edit($id)
    {
        $artists = $this->artistsRepository->find($id);

        return view('admin.artists.edit', compact('artists'));
    }

    public function update(Request $request, $id)
    {
        $this->artistsRepository->updateArtists($request, $id);

        return redirect('/admin/artists')->with('Update successful');
    }    

    public function destroy($id)
    {
        $this->artistsRepository->delete($id);

        return redirect('admin/artists')->with("The artists $id has been deleted!");
    }
}