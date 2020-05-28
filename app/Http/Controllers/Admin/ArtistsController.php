<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistsFormRequest;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ArtistsInterface;
use App\Repositories\Eloquent\ArtistsRepository;
use App\Services\ArtistsService;

class ArtistsController extends Controller
{

    protected $artistsRepository;
    protected $artistsService;

    public function __construct(ArtistsInterface $artistsRepository, ArtistsService $artistsService)
    {
        $this->artistsRepository = $artistsRepository;
        $this->artistsService = $artistsService;
    }

    public function index()
    {
        $artists = $this->artistsRepository->getAll();
        return view('admin.artists.index', [
            'artistses' => $artists
        ]);
    }

    public function create()
    {
        return view('admin.artists.create' );
    }

    public function store(ArtistsFormRequest $request)
    {
        $data = $request->all();
        $this->artistsService->create($request);
        return redirect('/admin/artists')->with("success");
    }

    public function edit($id)
    {
        $artists = $this->artistsRepository->find($id);
        return view('admin.artists.edit', compact('artists'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->artistsService->update($request, $id);
        return redirect('/admin/artists');
    }    

    public function destroy($id)
    {
        $this->artistsRepository->delete($id);
        return redirect('admin/artists')->with('status');
    }
}