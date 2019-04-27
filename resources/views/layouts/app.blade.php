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
    @include('inc.navbar')
    <br>
    <div class="container">
        @include('inc.messages') 
        @yield('content')
    </div>
    
    {{-- Bootstrap JavaScript --}}
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
    
</html>