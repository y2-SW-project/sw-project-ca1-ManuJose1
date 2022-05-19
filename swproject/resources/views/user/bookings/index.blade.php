@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Bookings</div>

                <div class="card-body">
                    @if (count($bookings) == 1)
                    <p>No bookings placed</p>
                    @else<table id="bookings_table" class="table table-hover">
                        <thead>
                            <th>Title: </th>
                            <th>Description: </th>
                            <th>Price(€): </th>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                            <tr data-id="{{ $booking->id }}">
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->num_players }}</td>
                                <td>{{ $booking->num_holes }}</td>

                                <td>
                                    <a href="{{ route('user.bookings.show', $booking->id) }}" class="btn btn-primary">Show More</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection