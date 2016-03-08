@extends('layouts.master')

@section('content')

    <h1>Editar Usuario</h1>
    <hr/>

    {!! Form::model($user, [
        'method' => 'PATCH',
        'url' => ['adminUsers/users', $user->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('firstName') ? 'has-error' : ''}}">
                {!! Form::label('firstName', 'Firstname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('firstName', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('firstName', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lastName') ? 'has-error' : ''}}">
                {!! Form::label('lastName', 'Lastname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lastName', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('lastName', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('userName') ? 'has-error' : ''}}">
                {!! Form::label('userName', 'Username: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('userName', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('userName', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('password', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection