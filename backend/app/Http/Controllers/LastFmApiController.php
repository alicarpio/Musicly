<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LastFmApiController extends Controller
{
    private function getApiKey()
    {
        return config('app.lastfm_api_key');
    }

    public function getTopAlbums($artist)
    {
        $apiKey = $this->getTopArtist();
        $url = "https://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=$artist&api_key=$apiKey&format=json";
        $response = Http::get($url);
        return $response->json();
    }

    public function getTopArtist()
    {
        $apiKey = $this->getApiKey();
        $url = "https://ws.audioscrobbler.com/2.0/?method=chart.gettopartists&api_key=$apiKey&format=json";
        $response = Http::get($url);
        return $response->json();
    }

    public function getTopTracks()
    {
        $apiKey = $this->getApiKey();
        $url = "https://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=$apiKey&format=json";
        $response = Http::get($url);
        return $response->json();
    }
}
