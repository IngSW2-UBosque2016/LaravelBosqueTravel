@extends('layouts.master')

@section('content')

    <h1>Stops <a href="{{ url('API/stops/create') }}" class="btn btn-primary pull-right btn-sm">Add New Stop</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name Stop</th><th>Location</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($stops as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('API/stops', $item->id) }}">{{ $item->name_stop }}</a></td><td>{{ $item->location }}</td>
                    <td>
                        <a href="{{ url('API/stops/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['API/stops', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $stops->render() !!} </div>
    </div>

@endsection
