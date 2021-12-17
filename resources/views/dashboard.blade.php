@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center text-uppercase">{{ __('Dashboard') }}</h1>
            <div class="col-10">
                <a href="/notes/create" class="btn btn-dark">New</a>
                <dashboard-list></dashboard-list>
            </div>
        </div>
    </div>
@endsection

