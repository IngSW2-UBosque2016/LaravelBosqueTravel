@extends('layouts.master')

@section('content')

    <h1>Road</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Route</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $road->id }}</td> <td> {{ $road->name }} </td><td> {{ $road->route }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection