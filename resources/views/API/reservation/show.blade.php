@extends('layouts.master')

@section('content')

    <h1>Reservation</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $reservation->id }}</td> <td> {{ $reservation->date }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection