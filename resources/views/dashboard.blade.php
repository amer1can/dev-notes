@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center text-uppercase">{{ __('Dashboard') }}</h1>
            <div class="col-6">
                <dashboard-list :list='@json($allNotes)'></dashboard-list>
            </div>
        </div>
    </div>
@endsection

