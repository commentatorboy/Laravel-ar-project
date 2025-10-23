<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'AR print')</title>
    <link rel="stylesheet" href="{{ asset('/wee3d/public/css/bulma.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/wee3d/public/css/app.css') }}">
    <script src="{{asset('/wee3d/public/js/app.js')}}"></script>
    <!--<script defer src="http://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>-->
</head>
<body>

    <ul>
        <li><a href="/">home!</a></li>
        <li><a href="/ARObject/create">Upload/link the 3D file</a></li>
    </ul>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
