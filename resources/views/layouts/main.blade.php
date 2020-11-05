<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>
    <script src="{{ asset('js/jquery-throttle-debounce.min.js') }}" defer></script>
    <script src="{{ asset('js/tail.datetime.min.js')}}" defer></script>
    <script src="https://js.pusher.com/5.1/pusher.min.js" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    
</head>
<body>
    <div class="container-fluid" style="min-width: 1024px;">
        @include('layouts._sidenav')
        
        @include('layouts._header')

        @yield('contents')
    </div>
</body>
</html>