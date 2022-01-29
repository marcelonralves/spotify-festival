<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_url' => 'https://api.spotify.com/v1',
            'timeout' => 5.0
        ]);
    }

    public function auth(string $code) : bool
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

           session()->put('auth_spotify', $response['access_token']);

           return true;
        } catch (GuzzleException $exception) {
            return false;
        }
    }

    public function getArtistsMostListen(string $auth) : array
    {
        $endpoint = 'https://api.spotify.com/v1/me/top/artists';

        try{
            $response = $this->client->request('GET', $endpoint, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $auth
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
