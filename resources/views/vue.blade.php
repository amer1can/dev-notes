@extends('layouts.app')

@section('content')

    <note-list :list='@json($data)'></note-list>

@endsection
