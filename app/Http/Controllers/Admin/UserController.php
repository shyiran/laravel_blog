<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @deprecated This will be removed.
 */
class UserController extends Controller
{
    public function index()
    {
        $data   = User::withTrashed()->get();
        $assign = compact('data');

        return view('admin.user.index', $assign);
    }

    public function edit($id)
    {
        $data   = User::withTrashed()->where('id', $id)->firstOrFail();
        $assign = compact('data');

        return view('admin.user.edit', $assign);
    }

    public function update(Request $request, $id)
    {
        User::withTrashed()->where('id', $id)->firstOrFail()->update($request->except('_token'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect(url('admin/user/index'));
    }

    public function restore($id)
    {
        User::onlyTrashed()->where('id', $id)->firstOrFail()->restore();

        return redirect(url('admin/user/index'));
    }

    public function forceDelete($id)
    {
        User::onlyTrashed()->where('id', $id)->firstOrFail()->forceDelete();

        return redirect('admin/user/index');
    }
}
