<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/foundation.css')}}
    {{HTML::script('js/vendor/modernizr.js')}}

    <title>E-commerce puntos</title>
</head>

<body>
    <div class="content">
        @yield('content')
    </div>

    @yield('scripts')
    {{HTML::script('js/vendor/jquery.js')}}
    {{HTML::script('js/foundation.min.js')}}
    <script>
        $(document).foundation();
    </script>
</body>
</html>