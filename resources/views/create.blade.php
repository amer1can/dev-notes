@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/api/notes" method="post">
            @csrf
            <input class="form-control" name="newTitle" id="newTitle" type="text" value="">
            <textarea class="form-control" name="newText" id="newText"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>

@endsection
