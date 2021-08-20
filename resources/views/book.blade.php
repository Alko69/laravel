@extends('layouts.base')
@section('css', 'book')

@section('title', 'Livre')

@section('content')
    <h1>Infos du livre</h1>
        <div>
            <div>{{ $book->title }}</div>
            <div>
                <p>Auteur :</p>
                <p>{{ $book->author }}</p>
            </div>
            <div>
                <p>Genre :</p>
                <p>{{ $book->genre }}</p>
            </div>
            <div>
                <p>Année de publication :</p>
                <p>{{ $book->publication_year }}</p>
            </div>
            <div>
                <p>Résumé :</p>
                <p>{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
@endsection