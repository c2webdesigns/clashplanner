@extends('layouts.master')

@section('content')

<div class="home-banner container-first">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-5">
        <img id="home-jumbo-image" src="/images/hogrider.jpg" alt="hog rider"/>
      </div>
      <div class="col-sm-7 jumbotron">
        <h1>Welcome Clanmate!</h1>
        <p>Home of the Ridgeview Crew clan from Clash of Clans</p>
        <p>{{ $login_status }}</p>
        <p><a class="btn btn-primary btn-lg" role="button">View Current War Plan &raquo;</a></p>
      </div>

    </div>
  </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="accent">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <h3>War History</h3>
        <p>Check our war history.</p>
      </div>

      <div class="col-md-3 col-md-offset-1">
        <h3>Resources</h3>
        <p>Learn about external resources to improve your clashing.</p>
      </div>

      <div class="col-md-3 col-md-offset-1">
        <h3>Join Our Clan?</h3>
        <p>Want to join our clan? Fill out the form</p>
        <p>Clan Hash: #8LJPV0Y9</p>
      </div>

    </div>

  </div>
</div>

<hr>

@stop