@extends('layout.app')

@section('contentMain')
<div class="container">
    <div class="container-main-top">
        <div class="label-main-top">
            <h2>{{$comic["title"]}}</h2>
        </div>
        <div class="label-main-top">
            <img src="{{$comic["thumb"]}}" alt="{{$comic["description"]}}">
        </div>

        <div class="back-button">
            <a href="/">Back</a>
        </div>
    </div>
</div>

@endsection


