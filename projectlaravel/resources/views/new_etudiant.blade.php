@extends('master')
@section('content')
    <form method="POST" action="{{ route('store_etudiant') }}">
       @csrf 
        <input type="text" name="noms" placeholder="noms">
        <input type="number" name="age" placeholder="age">
        <input type="submit" value="Valider">
    </form>
@endsection