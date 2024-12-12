<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginator = BlogCategory::query()->paginate(15);

        return view('blog.admin.category.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd(__METHOD__);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd(__METHOD__);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $item = BlogCategory::query()->findOrFail($id);
        $categoryList = BlogCategory::all();

        return view('blog.admin.category.edit',
            compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        dd(__METHOD__, $request->all(), $id);
    }
}
