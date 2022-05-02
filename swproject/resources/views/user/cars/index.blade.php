@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All available cars</div>

                <div class="card-body">
                    @if (count($cars) === 0)
                    <p>No cars for sale right now</p>
                    @else<table id="cars_table" class="table table-hover">
                        <thead>
                            <th>Title: </th>
                            <th>Description: </th>
                            <th>Price(€): </th>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                            <tr data-id="{{ $car->id }}">
                                <td>{{ $car->title }}</td>
                                <td>{{ $car->description }}</td>
                                <td>{{ $car->price }}</td>

                                <td>
                                    <a href="{{ route('user.cars.show', $car->id) }}" class="btn btn-primary">Show More</a>
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