@extends('layouts.base')
@section('css', 'backOffice')
@section('title', 'Back Office CRUD')
@section('header')
    <button><a href="/">Retour</a></button>
@endsection
@section('content')

    <div class="list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>MAJ</th>
                    <th>Supp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stars as $star)
                    <tr>
                        <td>{{ $star->id }}</td>

                        <td>{{ $star->lastname }}</td>
                        <td>{{ $star->firstname }}</td>
                        <td> <img style="width:30px; height:30px" src="{{ asset('img/' . $star->image_path) }}" alt=" " />
                        </td>
                        <td>{{ $star->description }}</td>
                        <td>
                            <a href="/update/{{ $star->id }}">MAJ</a>
                        </td>
                        <td>
                            <form action="/delete" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $star->id }}">
                                <input class="btn btn-danger" type="submit" value="x">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <p>Pour ajouter une célébrité :</p>
            <button><a href="/addStar">Ajouter</a></button>
        </div>
    </div>
@endsection
