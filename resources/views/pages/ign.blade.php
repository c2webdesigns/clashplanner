@extends('layouts.master')

@section('content')
    <div class="accent">
        <div class="container container-first">
            <div class="row">
                <div class="col-md-12">
                    <h1>Provide IGN</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3 well splash">
                <p class="lead">Please provide your IGN (In Game Name) so that your fellow clanmates know who you are.</p>

                {!! Form::open() !!}
                    <!-- Ign Form Input -->
                    <div class="form-group">
                        {!! Form::label('ign', 'Ign:') !!}
                        {!! Form::text('ign', Auth::user()->ign, ['class' => 'form-control']) !!}
                    </div>
                    <!-- Submit Form Input -->
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop