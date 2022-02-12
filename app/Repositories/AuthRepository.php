<?php

namespace App\Repositories;

use App\Http\Controllers\AuthController;
use App\Interfaces\OAuthLogin;
use App\Services\SpotifyService;

class AuthRepository
{
    public function dashboardUser(string $code, string $provider)
    {
        $getProvider = $this->getProvider($provider);
        $getProvider->authCode($code);
        if(!session()->has('auth_streaming')) {
            return view('welcome');
        }

        $userAuth = $getProvider->getArtistsUserAuthenticated(session()->get('auth_streaming'));
        shuffle($userAuth);

        return $userAuth;
    }

    /**
     * @throws \Exception
     */
    public function getProvider(string $provider) : OAuthLogin
    {
        if ($provider == "spotify") {
            return new SpotifyService();
        }
        throw new \Exception("Esse método de login não é válido. Faça uma nova tentativa!");
    }
}
