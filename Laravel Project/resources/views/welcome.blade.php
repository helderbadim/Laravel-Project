@extends('layouts.master')

@section('content')
    <!-- Background image -->
    <div
        class="p-5 text-center bg-image"
        style="
      background-image: url('https://blog-media.byjusfutureschool.com/bfs-blog/2022/07/18103533/Article-Page-14.jpg');
      height: 400px;
    "
    >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">BandFinder</h1>
                    <h4 class="mb-3">Discover Your Next Favorite Band</h4>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button"
                    >Find Bands You'll Love – Explore Now!</a
                    >
                </div>
            </div>
        </div>
    </div>



@endsection
