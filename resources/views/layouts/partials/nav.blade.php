<div class="navbar-inverse" role="navigation">

  <div class="container container-nav">
    <div class="row">
      <div class="col-md-12 navbar-header">
        <a class="navbar-brand" href="/"><img src="/images/logo.png" class="logo-nav" alt="logo brand"/></a>

        <div class="signin-toggle pull-right">

          @if (Auth::check())

            <a href="/clanmates/{{ Auth::user()->ign }}"><img src="{{ Auth::user()->avatar }}" class="user-avatar hidden-xs" alt="user avatar"/></a>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown settings-nav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ \App\Helpers::displayName() }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/clanmates/{{ Auth::user()->ign }}">Profile</a></li>
                  <li><a href="#">Stats</a></li>
                  <li><a href="#">Contact Leaders</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ route('logout_path') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
              </li>
            </ul>

          @else

            <a class="btn btn-success" id="btn-signin" href="/auth/login">Sign in</a>

          @endif

        </div>

      </div>
    </div>
  </div>

  @if(Auth::check())
  <nav class="main-navigation">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed navbar" data-toggle="collapse" data-target="#main-nav-links">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <ul class="nav nav-pills navbar-collapse collapse pull-right" id="main-nav-links">
          <li {!! (Request::is('/')) ? 'class="active"' : '' !!}><a href="{{ route('home_path') }}">Home</a></li>
          <li {!! (Request::is('clanmates')) ? 'class="active"' : '' !!}><a href="/clanmates">Clanmates</a></li>
          <li {!! (Request::is('wars')) ? 'class="active"' : '' !!}><a href="/wars">Wars</a></li>
          <li {!! (Request::is('guides')) ? 'class="active"' : '' !!}><a href="/guides">Guides</a></li>
          <li {!! (Request::is('feed')) ? 'class="active"' : '' !!}><a href="/feed">Facebook Feed</a></li>
        </ul>
    </div>
  </nav>

  @else


  @endif

</div>

@if ($errors)
  @include('layouts.partials.errors')
@endif