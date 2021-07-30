@extends('layouts.base')

@section('title')
Add Book
@endsection

@section('css', 'addBook')

@section('content')
<h1>Add a Book</h1>
<div id="form">
    <form action="{{url('addBook')}}" method="GET" id="form1" class="gradient">
        <div class="write">
            <label for="title">Titre du livre</label>
            <input type="text" name="title">
        </div>
        <div class="write">
            <label for="author">Auteur</label>
            <input type="text" name="author">
        </div>
        <div class="write">
            <label for="publication_year">Année de publication</label>
            <input type="number" name="publication_year">
        </div>
        <div class="write">
            <label for="genre">Genre</label>
            <input type="text" name="genre">
        </div>
    </form>
    <button type="submit" form="form1" id="sub">Soumettre</button>
</div>
@endsection

