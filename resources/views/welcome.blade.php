@extends('layout')
@section('content')

    <div class="container py-3">
        <header>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal title_festival">Spotifest</h1>
            </div>
        </header>
    <main>
        <div class="container bg-white mb-5 rounded-3 px-5">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Como seria o seu festival?</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Basta clicar no botão abaixo que você irá descobrir!</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a type="button" href="https://accounts.spotify.com/authorize?client_id={{env('SPOTIFY_OAUTH_ID')}}&redirect_uri={{env('SPOTIFY_REDIRECT_URI')}}&response_type=code&scope={{env('SPOTIFY_OAUTH_SCOPES')}}" class="btn button-color btn-lg px-4 gap-3"><i class="fab fa-spotify"></i> Login com o Spotify</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
