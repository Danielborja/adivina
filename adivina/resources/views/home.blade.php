@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form action="/choice"  method="GET">
                        @csrf
                        <input type="hidden" name="machineNumber" value="{{ $machineNumber }}">
                        <button style="width: 150px; height: 50px;" value="0"; name="choice">🎮</button>
                        dd{{$machineNumber}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
