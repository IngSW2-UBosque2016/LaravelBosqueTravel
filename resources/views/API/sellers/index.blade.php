@extends('layouts.master')

@section('content')

    <h1>Sellers <a href="{{ url('API/sellers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Seller</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name Seller</th><th>Last Name Seller</th><th>Password</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($sellers as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('API/sellers', $item->id_Seller) }}">{{ $item->name_seller }}</a></td><td>{{ $item->last_name_seller }}</td><td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ url('API/sellers/' . $item->id_Seller . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['API/sellers', $item->id_Seller],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $sellers->render() !!} </div>
    </div>

@endsection
