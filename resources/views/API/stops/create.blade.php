@extends('layouts.master')

@section('content')

    <h1>Create New Stop</h1>
    <hr/>

    {!! Form::open(['url' => 'API/stops', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('name_stop') ? 'has-error' : ''}}">
                {!! Form::label('name_stop', 'Name Stop: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name_stop', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name_stop', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
                {!! Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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