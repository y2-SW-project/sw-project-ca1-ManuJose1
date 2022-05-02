@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $car->title }}</div>

                <div class="card-body">
                    <table id="cars_table" class="table table-hover">
                        <tbody>
                            <!-- <tr>
                                <td>Image</td>
                                <td><img src="../app/resources/images/{{ $car->image }}"></td>
                            </tr> -->
                            <tr>
                                <td>Description</td>
                                <td>{{ $car->description }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $car->price }}</td>
                            </tr>
                            <tr>
                                <td>Engine Size</td>
                                <td>{{ $car->engine_size }}</td>
                            </tr>
                            <tr>
                                <td>NCT Due Date</td>
                                <td>{{ $car->nct_due }}</td>
                            </tr>
                            <tr>
                                <td>Yearly Road Tax</td>
                                <td>{{ $car->road_tax }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $car->contact_name }}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>{{ $car->contact_email }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{ $car->contact_phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('user.cars.index') }}" class="btn btn-default">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection