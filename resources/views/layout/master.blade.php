<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/master.css">
    </head>
    <body>
        <br>
        
        <nav>
            <a href="/">Home</a>
            <a href="/first">First</a>
        </nav>
    @yield('content')
        
        <br>
        
        <footer>
            <p>&copy laravel & Rin 2017</p>
        </footer>
    </body>
</html>