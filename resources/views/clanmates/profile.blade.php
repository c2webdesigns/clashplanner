@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-12">
                <h1><img src="{{ $clanmate[0]->avatar }}" class="img-circle user-avatar" alt="picture"/> {{ $clanmate[0]->ign }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h2>About:</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <h2>Stats:</h2>
            </div>
        </div>
    </div>
@stop