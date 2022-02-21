@extends('master')
@section('content')
<h1>Produits</h1>
<a href="{{ route('new_etudiant') }}">New etudiants</a>
<ul>
    @foreach ($product as $item)
        <li>{{$item->noms}}</li>
    @endforeach
</ul>
@endsection