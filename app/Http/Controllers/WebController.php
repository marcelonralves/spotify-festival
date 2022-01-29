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

        if(!$request->session()->has('auth_spotify')) {
            return view('welcome');
        }

        $artists = $spotify->getArtistsMostListen($request->session()->get('auth_spotify'));

        shuffle($artists);

        return view('dashboard', compact('artists'));

    }
}
