@extends('backend.system.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                sd {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
