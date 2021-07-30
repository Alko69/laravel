@extends('layouts.base')

@section('title')
Book List
@endsection

@section('css', 'books')

@section('content')
<h1>Book List</h1>
<div id="img">
    <img class="banner" src="/imges/lib.png" alt="">
</div>
<table>
    <tr>
        <th>N°</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Année de publication</th>
        <th>Genre</th>
        <th>Synopsis</th>
    </tr>
    @foreach ($books as $info)
    <tr>
    <td>{{$info->id}}</td>
    <td><a href= "book{{$info->id}}">{{$info->title}}</a></td>
    <td>{{$info->author}}</td>
    <td>{{$info->publication_year}}</td>
    <td>{{$info->genre}}</td>
    <td>{{$info->synopsis}}</td>
    </tr>
        
    @endforeach
</table>

@endsection
