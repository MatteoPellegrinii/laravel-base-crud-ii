@extends('admin.templates.base')

@section('maincontent')
    <main>
        @foreach ($comics as $comic)
            <div class="comic">
                <h2>{{$comic->title}} </h2>
                <p>{{$comic->description}} </p>
                <h3>{{$comic->price}} </h3>
                <h4>{{$comic->series}} </h4>
                <h4>{{$comic->sale_date}} </h4>
                <h3>{{$comic->type}} </h3>
            </div>
        @endforeach

    </main>
@endsection

<style>
    .comic{
        border-bottom: solid 2px black;
    }
</style>
