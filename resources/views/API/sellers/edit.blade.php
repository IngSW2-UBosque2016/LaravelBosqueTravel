@extends('layouts.master')

@section('content')

    <h1>Edit Seller</h1>
    <hr/>

    {!! Form::model($seller, [
        'method' => 'PATCH',
        'url' => ['API/sellers', $seller->id_Seller],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name_seller') ? 'has-error' : ''}}">
                {!! Form::label('name_seller', 'Name Seller: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name_seller', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name_seller', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name_seller') ? 'has-error' : ''}}">
                {!! Form::label('last_name_seller', 'Last Name Seller: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_name_seller', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('last_name_seller', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('password', null, ['class' => 'form-control', 'required' => 'required']) !!}
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