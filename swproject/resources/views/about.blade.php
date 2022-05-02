@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Our Dealership</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('We were established in 1994. We offer the best prices on some amazing cars. You wont be dissapointed if you buy from us.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
