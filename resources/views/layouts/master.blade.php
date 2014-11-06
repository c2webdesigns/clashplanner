<!doctype html>
<html lang="en">
    @include('layouts.partials.head')
    <body>

        @include('layouts.partials.nav')

        @yield('content')


        @include('layouts.partials.footer')
        @include('layouts.partials.js')
    </body>
</html>