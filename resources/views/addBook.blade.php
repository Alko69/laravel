@extends('layouts.base')

@section('title')
Add Book
@endsection

@section('css', 'addBook')

@section('content')
<h1>Add a Book</h1>
<div id="form">
    <form action=addBook method="POST" id="form1" class="gradient">
    @csrf
        <div class="write">
            <label for="title">Titre du livre</label>
            <input type="text" name="title">
        </div>
        <div class="write">
            <label for="author">Auteur</label>
            <select type ="text" name="author_id">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="write">
            <label for="publication_year">Année de publication</label>
            <input type="number" name="publication_year">
        </div>
        <div class="write">
            @foreach ($genres as $genre)
            <input type="checkbox" name="genres[]" value="{{$genre->id}}">
            <label for="genre">{{$genre->name}}</label>
            @endforeach
        </div>
        <div class="write">
            <label for="synopsis">Résumé</label>
            <input type="text" name="synopsis">
        </div>
    </form>
    <button type="submit" form="form1" id="sub">Soumettre</button>
</div>
@endsection

