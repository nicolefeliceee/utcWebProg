@extends('layout.master')

@section('title', "Home")

@section('content')

    <a href="/detail/{{ $highlight->id }}" class="text-decoration-none">
        <div class="card mb-3 border-0 mt-4">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="imgHighlight" style="background-image: url(https://source.unsplash.com/random/500x500?{{ $highlight->image }})"></div>
                </div>
                <div class="col-md-7">
                    <div class="card-body h-100 justify-content-center d-flex flex-column">
                        <h2 class="card-title">{{ $highlight->title }}</h2>
                        <p class="card-text">{{ $highlight->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <h5 class="mt-5 mb-3"><u>LATEST BOOK REVIEWS</u></h5>
    <div class="row">
        @foreach ($latests as $latest)
        <a class="col-md-3 text-decoration-none" href="/detail/{{ $latest->id }}">
            <div class="card border-0 rounded-0">
                <div class="img" style="background-image: url(https://source.unsplash.com/random/500x500?{{ $latest->image }})"></div>
                <div class="card-body p-0 mt-2">
                    <h5 class="card-title">{{ $latest->title }}</h5>
                    <p class="card-text" style="font-size: 13px">{{ $latest->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $latest->date }}</small></p>
                </div>
                </div>
            </a>
        @endforeach
    </div>

    <h5 class="mt-5 mb-3"><u>BOOK SERIES REVIEWS</u></h5>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
                <div class="card border-0 rounded-0 mb-4">
                    <div class="img" style="background-image: url(https://source.unsplash.com/random/500x500?{{ $post->image }})"></div>
                    <div class="card-body p-0 mt-2">
                        <h6 class="card-title">{{ $post->title }}</h6>
                        <a href="/detail/{{ $post->id }}" class="btn btn-transparant border border-dark rounded-0 mt-2">Read Post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
