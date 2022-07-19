@extends('admin.templates.base')

@section('maincontent')
<h1>insert new comics</h1>

<form action="{{ route('comics.store')}} " method="post">
    @csrf
    <label for="">title</label>
    <input type="text" name="title" id="">
    <label for="">description</label>
    <input type="text" name="description" id="">
    <label for="">price</label>
    <input type="text" name="price" id="">
    <label for="">series</label>
    <input type="text" name="series" id="">
    <label for="">sale_date</label>
    <input type="text" name="sale_date" id="">
    <label for="">type</label>
    <input type="text" name="type" id="">

    <button type="submit">save</button>
</form>
@endsection