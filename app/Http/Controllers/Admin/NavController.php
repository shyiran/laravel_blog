<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Nav\Store;
use App\Models\Nav;
use Illuminate\Http\Request;

/**
 * @deprecated This will be removed.
 */
class NavController extends Controller
{
    public function index()
    {
        $nav    = Nav::withTrashed()->get();
        $assign = compact('nav');

        return view('admin.nav.index', $assign);
    }

    public function create()
    {
        return view('admin.nav.create');
    }

    public function store(Store $request)
    {
        Nav::create($request->except('_token'));

        return redirect(url('admin/nav/index'));
    }

    public function edit($id)
    {
        $nav    = Nav::withTrashed()->where('id', $id)->firstOrFail();
        $assign = compact('nav');

        return view('admin.nav.edit', $assign);
    }

    public function update(Request $request, $id)
    {
        Nav::withTrashed()->where('id', $id)->firstOrFail()->update($request->except('_token'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        Nav::destroy($id);

        return redirect(url('admin/nav/index'));
    }

    public function restore($id)
    {
        Nav::onlyTrashed()->where('id', $id)->firstOrFail()->restore();

        return redirect(url('admin/nav/index'));
    }

    public function forceDelete($id)
    {
        Nav::onlyTrashed()->where('id', $id)->firstOrFail()->forceDelete();

        return redirect(url('admin/nav/index'));
    }

    public function sort(Request $request, Nav $navModel)
    {
        $data     = $request->except('_token');
        $sortData = [];
        foreach ($data as $k => $v) {
            $sortData[] = [
                'id'   => $k,
                'sort' => $v,
            ];
        }
        $navModel->updateBatch($sortData);

        return redirect()->back();
    }
}
