@extends('layout.app')

@section('contentMain')
<div class="container">
    <main>
        <!-- container-Jumbotron  -->
        <div class="container-main-top">
            <div class="label-main-top">CURRENT SERIES</div>
        </div>
        <!-- container Comics  -->
        <div class="container-main-bottom">
            <div class="content-series">
                @foreach ($comics as $item)
                    <div class="card">
                        <a href="singleCard">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" />
                            <p>{{ $item['title'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="main-button">
                <button>LOAD MORE</button>
            </div>
        </div>
    </main>
</div>
@endsection


