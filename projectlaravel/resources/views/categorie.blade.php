@extends('layouts.master')
@section('content')
<h1>Categories</h1>
<form action="{{route('store')}}" method="POST">
@csrf 
    <div class="form-group col-md-4">
        <label for="nom">Noms</label>
        <input type="text" placeholder="noms" name="name" class="form-control">
        <label for="espece">Espece</label>
        <input type="text" placeholder="espace" name="eapace" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Enregistrer">
</form>

<ul>
    @foreach ($catego as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
@endsection