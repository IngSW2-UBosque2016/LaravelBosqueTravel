@extends('layouts.master')

@section('content')

    <h1>Seller</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>id_Seller.</th> <th>Name Seller</th><th>Last Name Seller</th><th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $seller->id_Seller }}</td> <td> {{ $seller->name_seller }} </td><td> {{ $seller->last_name_seller }} </td><td> {{ $seller->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection