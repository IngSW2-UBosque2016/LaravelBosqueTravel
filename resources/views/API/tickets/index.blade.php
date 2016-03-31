@extends('layouts.master')

@section('content')

    <h1>Tickets <a href="{{ url('API/tickets/create') }}" class="btn btn-primary pull-right btn-sm">Add New Ticket</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Id User</th><th>Id Seller</th><th>Id Reservation</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tickets as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('API/tickets', $item->id) }}">{{ $item->id_user }}</a></td><td>{{ $item->id_seller }}</td><td>{{ $item->id_reservation }}</td>
                    <td>
                        <a href="{{ url('API/tickets/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['API/tickets', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $tickets->render() !!} </div>
    </div>

@endsection
