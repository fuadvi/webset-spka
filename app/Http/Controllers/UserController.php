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
}
