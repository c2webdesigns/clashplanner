@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-12">
                <h1>Clanmates</h1>
                @if ($leader)
                    <a href="clanmates/create" class="btn btn-primary pull-right">Add a new clanmate!</a>
                @endif
            </div>
            <div class="col-md-12">
                @foreach ($clanmates as $clanmate)
                    <img src="{{ $clanmate->avatar }}" class="img-circle user-avatar" alt="picture"/>
                @endforeach
            </div>
        </div>
    </div>
@stop