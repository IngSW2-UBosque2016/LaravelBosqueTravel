@extends('layouts.master')

@section('content')

    <h1>Stop</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name Stop</th><th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $stop->id }}</td> <td> {{ $stop->name_stop }} </td><td> {{ $stop->location }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection