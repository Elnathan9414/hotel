@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- STAT CARDS -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6>Today's Bookings</h6>
                <h3>{{ $todayBookings }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6>Arrivals Today</h6>
                <h3>{{ $arrivals }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6>Departures Today</h6>
                <h3>{{ $departures }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6>Revenue Today</h6>
                <h3>${{ $revenue }}</h3>
            </div>
        </div>
    </div>

    <!-- CALENDAR -->
    <div class="card shadow-sm p-4 mb-4">
        @include('reservations.calendar')
    </div>

    <!-- LIST -->
    <div class="card shadow-sm p-4">
        @include('reservations.list')
    </div>

</div>

@endsection