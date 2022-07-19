@extends('admin.templates.base')

@section('maincontent')
    <h1>Fumetto: {{$comic->title}} </h1>
    <div class="comic">
        <p>{{$comic->description}} </p>
        <h3>{{$comic->price}} </h3>
        <h4>{{$comic->series}} </h4>
        <h4>{{$comic->sale_date}} </h4>
        <h3>{{$comic->type}} </h3>
    </div>
@endsection