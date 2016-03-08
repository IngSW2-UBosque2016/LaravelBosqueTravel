@extends('layouts.master')

@section('content')

    <h1>Usuario <a href="{{ url('adminUsers/users/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Usuario</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Apellido</th><th>Nom. Usuario</th><th>Accion</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($users as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('adminUsers/users', $item->id) }}">{{ $item->firstName }}</a></td><td>{{ $item->lastName }}</td><td>{{ $item->userName }}</td>
                    <td>
                        <a href="{{ url('adminUsers/users/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['adminUsers/users', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $users->render() !!} </div>
    </div>

@endsection
