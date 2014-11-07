<!doctype html>
<html lang="en">
    @include('layouts.partials.head')
    <body>

        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-push-3">
                    <img src="/images/builder.png" class="hidden-xs" alt="Builder guy"/>
                </div>
            </div>
        </div>

        @yield('content')


        @include('layouts.partials.footer')
        @include('layouts.partials.js')
    </body>
</html>