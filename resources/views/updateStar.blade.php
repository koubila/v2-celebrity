@extends('layouts.base')
@section('css', 'style')
@section('title', 'Modifier')
@section('header')
    <button><a href="/backOffice">Annuler</a></button>
@endsection
@section('content')
    <h1 class="title">Modifier une célébrité</h1>
    <div>
        <form action="/update/{{ $star->id }}" method="POST">
            @csrf
            <div>
                <label for="firstname">Prénom</label>
                <div>
                    <input type="text" name="firstname" placeholder="Prénom" value="{{ $star->firstname }}">
                </div>
            </div>
            <div>
                <label for="lastname">Nom</label>
                <div>
                    <input type="text" name="lastname" placeholder="Nom" value="{{ $star->lastname }}">
                </div>
            </div>
            <div>
                <label for="image">Image</label>
                <div>
                    <img style="width:30px; height:30px" src="{{ $star->image_path }}" />
                    <input type="file" name="image" value="{{ $star->image_path }}">
                </div>
            </div>

            <div>
                <label for="description">Description</label>
                <div>
                    <textarea name="description" id="" cols="24" rows="2">{{ $star->description }}</textarea>
                </div>
            </div>
            <div>
                <button type="submit">Envoyer !</button>
            </div>
        </form>
    </div>
@endsection
