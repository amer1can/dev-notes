@extends('layouts.app')

@section('content')

    <single-note :note='@json($nt)'></single-note>

    <div>
        {{ Auth::user()->id }}
    </div>

@endsection
