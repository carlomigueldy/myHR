<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','myHR')}}</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <br>
    @yield('content')
</body>

    {{-- Bootstrap JavaScript --}}
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>