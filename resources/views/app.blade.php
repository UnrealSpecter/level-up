<!DOCTYPE html>
<html class="min-h-full">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <meta name="turbolinks-cache-control" content="no-cache">
</head>
<body class="overflow-x-hidden smooth-scroll">
    <div id="app">@yield('content')</div>
</body>
</html>
