@extends('layouts.app')

@section('content')
<div class="container" style="font-family: 'Gill Sans', sans-serif; color:black;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-family: 'Gill Sans', sans-serif; color:black;">{{ __('Dashboard') }}</div>

                <div class="card-body" style="font-family: 'Gill Sans', sans-serif; color:black;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
