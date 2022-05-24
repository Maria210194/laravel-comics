@extends('layout.app')

@section('contentMain')
<div class="container">
    <div class="container-main-top">
    </div>
        <div class="main-detail-title">
            <h2>{{$comic["title"]}}</h2>
        </div>
    <div class="container-detail">
        <div class="main-detail-img">
            <img src="{{$comic["thumb"]}}" alt="{{$comic["description"]}}">
        </div>
        <div class="main-detail-description">
            <p>{{$comic["description"]}}</p>
        </div>
    </div>
    <div class="back-button">
        <a href="/">Back</a>
    </div>
</div>

@endsection


