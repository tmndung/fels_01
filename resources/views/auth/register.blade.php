@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('message.register')</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {!! Form::label('name', trans('message.name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'required', 'autofocus' ]) !!}

                                @include('errors.error')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('message.email_address'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required' ]) !!}

                                @include('errors.error')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('message.password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required']) !!}

                                @include('errors.error')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('message.confirm_password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('message.register'), ['type' => 'submit', 'class' => 'btn btn-primary'] ) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
