@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-6 well col-md-push-3 login-form">
                <h1>Sign Up</h1>
                    {!! Form::open(['url' => 'signup']) !!}
                        <!-- Email Form Input -->
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Ign Form Input -->
                        <div class="form-group">
                            {!! Form::label('ign', 'Clash of Clans Name:') !!}
                            {!! Form::text('ign', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Password Form Input -->
                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>

                        <!-- Password Confirm Form Input -->
                        <div class="form-group">
                            {!! Form::label('password_confirm', 'Password Confirmation:') !!}
                            {!! Form::text('password_confirm', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Form -->
                          <div class="form-group">
                              {!! Form::submit('Sign Up', ['class' => 'form-control btn-primary']) !!}
                          </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop