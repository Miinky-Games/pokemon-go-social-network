<!DOCTYPE html>
<html lang="en">
    <head>

        @include('_partials._header')

    </head>

    <body background="background.jpg">
        <!-- Default Bootstrap Navbar -->
        <nav class="navbar navbar-default">

            @include('_partials._navigation')

        </nav>
  
        <div class="container">

            @include('_partials._messages')
            @yield('content')

        </div> <!-- end of container -->

        @include('_partials._footer')

        @include('_partials._js')

        @yield('scripts')

    </body>
</html>