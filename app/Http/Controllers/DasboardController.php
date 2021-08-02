<?php

namespace App\Http\Controllers;

use App\Models\DataEmail;
use App\Models\Spka;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        $spka = Spka::count();
        $dataEmail = DataEmail::count();

        return view('pages.dasboard')->with(
            [
                'spak' => $spka,
                'dataEmail' => $dataEmail
            ]
        );
    }
}
