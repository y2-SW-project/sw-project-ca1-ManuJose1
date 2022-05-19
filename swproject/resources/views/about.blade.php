@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Ashford Golf Club</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('
                        Founded in 1885 by Mr. John Lumsden, The Royal Dublin Golf Club is steeped in golfing history and presents a stern golfing examination on a truly magnificent links course and is widely accepted as one of the greatest links courses in the world. The links was originally designed by H.S.Colt, the world famous golf architect from Sunningdale.
                        ') }}
                        <br><br>
                        {{ __('
                        The Ashford Golf Club has hosted many Irish championships, starting with the Irish Amateur Open back in 1894. We hosted The Carrolls Irish Open from 1983-1985. The Club has also regularly hosted the Irish Amateur Close and the Irish PGA.
                        ') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection