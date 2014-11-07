@extends('layouts.master')

@section('content')
    <div class="container container-first">
        <div class="row">
            <div class="col-md-12">
                <h1>Facebook Feed</h1>
            </div>
        </div>
    </div>

    <div class="container">

        @foreach ($feed as $post)



            <div class="col-md-2">
                <img src="https://graph.facebook.com/{{ $post->from->id }}/picture?type=normal" class="img-circle user-avatar avatar-feed" alt="facebook user"/>
            </div>
            <div class="col-md-10">
                <div class="well">
                    <div class="row">
                        <div class="col-sm-10">
                            <p class="lead"><a href="https://www.facebook.com/{{ $post->from->id }}" target="_blank"    >{{ \App\Helpers::displayFacebookName($post->from->id, $post->from->name) }}</a> <span class="created-time"> at {{ date("M d Y h:ia", strtotime($post->created_time)) }}</span></p>
                        </div>
                        <div class="col-sm-12 textwrap">
                        {!! nl2br($post->message) !!}
                        @if (isset($post->picture))
                            <p><a href="{{ $post->link }}" target="_blank"><img src="{{ $post->picture }}" alt="Facebook image post" class="img-thumbnail"/></a></p>
                        @endif
                        <p><a href="{{ $post->actions[0]->link }}" class="pull-right" target="_blank">View on Facebook</a></p>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>


@stop