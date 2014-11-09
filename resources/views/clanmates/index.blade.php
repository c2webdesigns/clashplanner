@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-12">
                <h1>Clanmates</h1>
            </div>

        @if ($leader)
            <div class="col-md-12">
            <a href="clanmates/create" class="btn btn-primary pull-right">Add a new clanmate!</a>
            </div>
        @endif

        </div>

        @foreach ($clanmates->chunk(4) as $clanmateSet)
        <div class="row">
        @foreach ($clanmateSet as $clanmate)
            <div class="col-sm-3 clanmate-block">
                <a href="/clanmates/{{ $clanmate->ign }}"><img src="{{ $clanmate->avatar }}" class="img-circle user-avatar" alt="picture"/></a>
                <h4 class="clanmate-block-ign">{{ $clanmate->ign }}</h4>
            </div>
        @endforeach
        </div>
        @endforeach
    </div>
@stop