<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function auth(Request $request)
    {
        $spotify = new AuthController();

        $spotify->auth($request->query('code'));

        $artists = $spotify->getArtistsMostListen(session()->get('auth_spotify'));

        shuffle($artists);

        return view('dashboard', compact('artists'));

    }
}
