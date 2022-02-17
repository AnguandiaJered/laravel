@extends('master')
@section('content')
<h1>Categories</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Voluptatibus corrupti illum sapiente a consequatur debitis magni 
    ipsum cupiditate dignissimos fuga quod, expedita ducimus. Adipisci 
    aliquid dicta, voluptates placeat beatae quibusdam.
</p>

<ul>
    @foreach ($catego as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
@endsection