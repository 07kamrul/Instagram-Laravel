@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pr-5">
            <img src="\svg\dashboard.png" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->name}}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-blod">{{$user->profile->title}}</div>
            <div>{{$user-> profile-> description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="\images\img1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="\images\img1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="\images\img1.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection

<!-- 39:17 -->