<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('inc.navbar')
    @if (Request::is('/'))
        @include('inc.showcase')
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                @include('inc/messages')
                @yield('content')
            </div>
            <div class="col-md-4">
                 @include('inc.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy ACME</p>
    </footer>
</body>

</html>