<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Store;
use App\Http\Requests\Category\Update;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * @deprecated This will be removed.
 */
class CategoryController extends Controller
{
    public function index()
    {
        $data   = Category::withTrashed()->orderBy('sort')->get();
        $assign = compact('data');

        return view('admin.category.index', $assign);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Store $request)
    {
        Category::create($request->except('_token'));

        return redirect(url('admin/category/index'));
    }

    public function edit($id)
    {
        $data   = Category::withTrashed()->where('id', $id)->firstOrFail();
        $assign = compact('data');

        return view('admin.category.edit', $assign);
    }

    public function update(Update $request, $id)
    {
        Category::withTrashed()->where('id', $id)->firstOrFail()->update($request->except('_token'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return redirect(url('admin/category/index'));
    }

    public function sort(Request $request, Category $categoryModel)
    {
        $data     = $request->except('_token');
        $sortData = [];
        foreach ($data as $k => $v) {
            $sortData[] = [
                'id'   => $k,
                'sort' => $v,
            ];
        }
        $categoryModel->updateBatch($sortData);

        return redirect()->back();
    }

    public function restore($id)
    {
        Category::onlyTrashed()->where('id', $id)->firstOrFail()->restore();

        return redirect(url('admin/category/index'));
    }

    public function forceDelete($id)
    {
        Category::onlyTrashed()->where('id', $id)->firstOrFail()->forceDelete();

        return redirect(url('admin/category/index'));
    }
}
