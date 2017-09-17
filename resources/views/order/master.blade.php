<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/css/bootstrap.css" type="text/css" rel="stylesheet">

</head>
<body>
    {{--@include("order.top")--}}
    <section>
        <div class="container">
                @yield('content')
        </div>
    </section>
    {{--@include("order.footer")--}}

    <script src="{{asset('/js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>