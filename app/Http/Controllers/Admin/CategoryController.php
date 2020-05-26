<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CategoryInterface;
use  App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    public function index()
    {
        $category = $this->categoryRepository->getAll();
        return view('admin.category.index', [
            'categories' => $category
        ]);
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CategoryFormRequest $request)
    {
        $data = $request->all();
        $this->categoryRepository->create($data);
        return redirect('/admin/category')->with("success");
    }


    public function update(CategoryFormRequest $request, $id)
    {
        $data = $request->all();
        $this->categoryRepository->update($id, $data);
        return redirect('/admin/category');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);
        return view('admin.category.edit', compact('category'));
    }


    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->route('admin.category.index');
    }
}