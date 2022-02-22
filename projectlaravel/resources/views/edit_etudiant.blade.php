@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="/edit_etudiant" method="POST" >
        @csrf 
        <input type="hidden" value="{{$etudiant->id}}" name="id">
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="text" name="noms" value="{{$etudiant->noms}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="number" name="age" value="{{$etudiant->age}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
            </div>
        </form>
    </div>
@endsection