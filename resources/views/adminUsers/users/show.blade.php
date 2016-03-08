@extends('layouts.master')

@section('content')

    <h1>Usuario</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Apellido</th><th>UserName</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->firstName }} </td><td> {{ $user->lastName }} </td><td> {{ $user->userName }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection