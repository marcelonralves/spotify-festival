
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Heroes · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <meta name="theme-color" content="#7952b3">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroes.css') }}" rel="stylesheet">
</head>
<body>

<div class="container py-3">
    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal title_festival">Seu festival!</h1>
        </div>
    </header>

    <main>

        <div class="row row-cols-1 mb-2 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{ now()->format('d/M') }}</h4>
                    </div>
                    <div class="card-body card_artists">
                        •
                            @for($i=0; $i< 6; $i++)
                            {{ $artists[$i] }} •
                            @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 mb-2 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">

                    <div class="card-header card_date card_artists_title_main py-3">
                        <h4 class="my-0 fw-normal">{{ now()->addDay()->format('d/M') }}</h4>
                    </div>
                    <div class="card-body card_artists card_artists_main">
                        •
                        @for($i=6; $i< 14; $i++)
                            {{ Illuminate\Support\Str::finish($artists[$i], ' ') }} •
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 mb-2 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{ now()->addDays(2)->format('d/M') }}</h4>
                    </div>
                    <div class="card-body card_artists">
                        •
                        @for($i=14; $i< 20; $i++)
                            {{ $artists[$i] }} •
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
