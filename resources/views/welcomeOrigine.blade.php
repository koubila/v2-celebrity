@extends('layouts.base')
@section('css', 'style')
@section('title', 'Liste des Stars')
@section('content')
    <main>
        <section class="container">
            <div class="names">
                @foreach ($stars as $star)
                    <div>
                        <button class="button" onclick="describeStar();">{{ $star->firstname }}
                            {{ $star->lastname }}</button>
                    </div>
                @endforeach
            </div>
            @foreach ($stars as $star)
                <div class="description" style="display:none;">

                    <div class="container-describe">
                        <div class="picture">
                            <img src="{{ asset('img/' . $star->image_path) }}" alt="avatar">
                        </div>
                        <div class="star-name">
                            <h2>{{ $star->firstname }} {{ $star->lastname }}</h2>
                        </div>

                        <div class="star-describe">
                            <p>{{ $star->description }} {{ $star->id }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </section>
    </main>

    <script src="/js/script.js"></script>
@endsection
