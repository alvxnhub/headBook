@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3 p-5 d-flex justify-content-center">
            <img src="https://scontent.fmnl17-5.fna.fbcdn.net/v/t39.30808-1/502940899_3251112318360158_8972572154323704464_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=110&ccb=1-7&_nc_sid=1d2534&_nc_ohc=0fmV-TZ5XlYQ7kNvwEurD2C&_nc_oc=AdljvlJQLAtXj659t2hWpcxsfxZhod0aX7G37CEs5yBUWP7kfSAgiog4HOrqiG255ao&_nc_zt=24&_nc_ht=scontent.fmnl17-5.fna&_nc_gid=JqRYSWeVX9PzbDFSKHCTLA&oh=00_AfVBfFHLALn8AKMSU3oN8Ob5_bfYYgPSt_PUzno33aT3NA&oe=68A502A2" class="rounded-circle img-fluid" style="width: 170px; height: 170px; border: 3px solid white; object-fit: cover;">
        </div>
        <div class="col-12 col-md-9 p-5">
        <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex flex-wrap">
                <div class="pe-4"><strong>1553</strong> post</div>
                <div class="pe-4"><strong>23k</strong> followers</div>
                <div class="pe-4"><strong>101</strong> following</div>
            </div>
            <div class="pt-4"><strong>JuanDelaCruz.org</strong></div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</div>
            <div><a href="#">www.JuanDelaCruz.org</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12"><h1>Recent Post</h1></div>
        @for ($i = 0; $i < 6; $i++)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <img src="https://imgs.search.brave.com/EiJngaedj4nJYE1Bzaqwnz7A0jSEKXDpa7BzOUddIno/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi9zaHJl/ay1jYXJ0b29uLWNo/YXJhY3Rlci1tYWRl/LXdheC1zYW5rdC1w/ZXRlcnNidXJnLW11/c2V1bS1leGhpYml0/aW9uLWJ1Y2hhcmVz/dC0zODEwMzM5OC5q/cGc" class="w-100 p-2 img-hover-effect img-fluid">
            </div>
        @endfor
    </div>
</div>
<style>
.img-hover-effect {
    transition: transform 0.3s, box-shadow 0.3s;
}
.img-hover-effect:hover {
    transform: scale(1.03);
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}
</style>
@endsection
