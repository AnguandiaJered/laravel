@extends('layouts.master')
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-primary">
            @foreach ($errors->all() as $item)
                <p>{{ $item }}</p>
            @endforeach
        </div>
    @endif
   
    <form method="POST" action="{{route('store_etudiant')}}">
       @csrf                 
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="text" name="noms" placeholder="noms" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" placeholder="age" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
    </form>
</div>
@endsection