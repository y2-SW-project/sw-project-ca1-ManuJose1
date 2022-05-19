@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Golf Booking</div>

                <div class="card-body">
                    <table id="bookings_table" class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Date</td>
                                <td>{{ $booking->date }}</td>
                            </tr>
                            <tr>
                                <td>Number of players</td>
                                <td>{{ $booking->num_players }}</td>
                            </tr>
                            <tr>
                                <td>No. of holes being played</td>
                                <td>{{ $booking->num_holes }}</td>
                            </tr>
                            <tr>
                                <td>Name of member</td>
                                <td>{{ $booking->member_name }}</td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <a href="{{ route('user.bookings.index') }}" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection