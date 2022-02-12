<?php

namespace App\Services;

use App\Interfaces\OAuthLogin;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class SpotifyService implements OAuthLogin
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_url' => 'https://api.spotify.com/v1',
            'timeout' => 5.0
        ]);
    }

    public function authCode(string $code): bool
    {
        $url = 'https://accounts.spotify.com/api/token';
        try {
            $response = $this->client->request('POST', $url, [
                'form_params' => [
                    'client_id' => env('SPOTIFY_OAUTH_ID'),
                    'client_secret' => env('SPOTIFY_OAUTH_SECRET'),
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'redirect_uri' => env('SPOTIFY_REDIRECT_URI')
                ],
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]);

            $response = json_decode($response->getBody(), true);


            session()->put('auth_streaming', $response['access_token']);
            return true;

        } catch (GuzzleException) {
            return false;
        }
    }

    public function getArtistsUserAuthenticated(string $token) : array
    {
        $endpoint = 'https://api.spotify.com/v1/me/top/artists';

        try{
            $response = $this->client->request('GET', $endpoint, [
                'limit' => 50,
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ]
            ]);
        } catch (GuzzleException $exception) {
            return ["message" => $exception->getMessage()];
        }

        $responseSpotify = json_decode($response->getBody(), true);

        $nameArtists = array();
        for($i=0; $i< 20; $i++) {
            array_push($nameArtists, $responseSpotify["items"][$i]["name"]);
        }

        return $nameArtists;
    }
}
