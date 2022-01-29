
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Spotifest</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroes.css') }}" rel="stylesheet">
</head>
<body>

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


<script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
