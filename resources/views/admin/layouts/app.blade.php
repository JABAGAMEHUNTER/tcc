<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') - {{ config('app.name')}}</title>
</head>
<body class="bg-green-600">

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
