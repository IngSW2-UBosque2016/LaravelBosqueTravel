@extends('layouts.master')

@section('content')

    <h1>Ticket</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id User</th><th>Id Seller</th><th>Id Reservation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ticket->id }}</td> <td> {{ $ticket->id_user }} </td><td> {{ $ticket->id_seller }} </td><td> {{ $ticket->id_reservation }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection