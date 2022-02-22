@extends('layouts.master')
@section('content')
<div class="container">
    <form method="POST" action="new_etudiant">
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