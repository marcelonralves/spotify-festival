@extends('layout')
@section('content')

<div class="container py-3">
    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal title_festival">Spotifest</h1>
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
@endsection
