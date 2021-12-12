@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ __('Vue notes') }}</h1> {{-- просто вывод строки --}}
                <div class="card">
                    <div class="card-header">Card header</div>
                    <div class="card-body">
                        <h3>Card Here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
