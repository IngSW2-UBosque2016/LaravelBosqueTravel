@extends('layouts.master')

@section('content')

    <h1>Create New Ticket</h1>
    <hr/>

    {!! Form::open(['url' => 'API/tickets', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">
                {!! Form::label('id_user', 'Id User: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('id_user', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('id_seller') ? 'has-error' : ''}}">
                {!! Form::label('id_seller', 'Id Seller: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('id_seller', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('id_seller', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('id_reservation') ? 'has-error' : ''}}">
                {!! Form::label('id_reservation', 'Id Reservation: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('id_reservation', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('id_reservation', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('create_date') ? 'has-error' : ''}}">
                {!! Form::label('create_date', 'Create Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('create_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('create_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('expiration_date') ? 'has-error' : ''}}">
                {!! Form::label('expiration_date', 'Expiration Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('expiration_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('expiration_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('use_date') ? 'has-error' : ''}}">
                {!! Form::label('use_date', 'Use Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('use_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('use_date', '<p class="help-block">:message</p>') !!}
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