<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title', 'Default title')</title>
    </head>
    <body>
        <div class="content">

            @yield('content')


            <h2>Menu</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact us</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/projects">Projects</a></li>
            </ul>
        </div>
    </body>
</html>
