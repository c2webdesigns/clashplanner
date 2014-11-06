@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-6 col-md-push-3 well splash login-form">

                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/facebook-128.png" alt="Facebook login"/>
                    </div>
                    <div class="col-md-8">
                        <h1>Sign In with Facebook</h1>
                    </div>
                </div>

                <p>You must have Facebook to use this website. This app ties into the Facebook fan page.</p>
                {!! Form::open(['url' => 'auth/socialLogin']) !!}

                      <!-- Submit Form Input -->
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <a href="{{ route('socialLogin') }}" class="btn btn-primary btn-lg">Sign in with Facebook</a>
                          </div>
                        </div>
                      </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop