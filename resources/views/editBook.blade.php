@extends('layouts.base')
@section('css', 'addBook')

@section('title', 'Livre')

@section('content')

<h1>Edit</h1>
<div id="form">
    <form action=editBook method="POST" id="form1" class="gradient">
        @csrf
        <input type="hidden" name="id" value="{{$info->id}}">
        <div class="write">
            <label for="title">Titre du livre</label>
            <input type="text" name="title" value="{{$info->title}}">
        </div>
        <div class="write">
            <label for="author">Auteur</label>
            <select type ="text" name="author_id">
                @foreach ($authors as $author)
                    @if ($info->author_id === $author->id)
                    <option value="{{$author->id}}" selected >{{$author->name}}</option>
                    @else
                    <option value="{{$author->id}}">{{$author->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="write">
            <label for="publication_year">Année de publication</label>
            <input type="number" name="publication_year" value="{{$info->publication_year}}">
        </div>
        <div class="write">
            <label for="genre">Genre</label>
            <input type="text" name="genre" value="{{$info->genre}}">
        </div>
        <div class="write">
            <label for="synopsis">Résumé</label>
            <input type="text" name="synopsis" value="{{$info->synopsis}}">
        </div>
    </form>
    <button type="submit" form="form1" id="sub">Soumettre</button>
</div>
@endsection