<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $items = User::paginate(5);

        return view('pages.user.index')->with([
            'items' => $items
        ]);
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.user.update')->with([
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'string',
            'jabatan' => 'string',
            'level' => 'in:user,admin'
        ]);

        $item = User::findOrFail($id);
        $data = $request->all();
        $item->fill($data);
        $item->save();

        return redirect()->route('/user');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('/user');
    }
}
