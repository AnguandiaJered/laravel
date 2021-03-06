@extends('layouts.master')
@section('content')
<div class="container">
    @if(\Session::has('message'))
        <div class="alert alert-primary">{{ \Session::get('message')}}</div>
    @endif
    <h1>Liste des etudiants</h1>
    <!-- <a class="btn btn-primary offset-10" href="{{ route('new_etudiant') }}">New etudiants</a> -->

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Noms</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($etudiant as $item)
            <tr>              
                <td>{{$item->id}}</td>
                <td>{{$item->noms}}</td>
                <td>{{$item->age}}</td>
                <td>
                    <a class="btn btn-success" href="{{'/edit_etudiant/'.$item->id}}".$id>edit</a>
                    <a class="btn btn-danger" href="{{'/delete_etudiant/'.$item->id}}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection