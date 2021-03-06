<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Interfaces\OAuthLogin;
use App\Repositories\AuthRepository;
use App\Services\SpotifyService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function auth(AuthRequest $request, string $provider)
    {
        try {
            $artists = $this->repository->dashboardUser($request->query('code'), $provider);
        } catch (\Exception) {
            return view('welcome');
        }
       return view('dashboard', compact('artists'));
    }


}
