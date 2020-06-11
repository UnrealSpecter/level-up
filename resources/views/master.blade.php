<!doctype html>
<html lang="nl" class="min-h-full">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body class="overflow-x-hidden smooth-scroll">
        <div id="vue">
            @yield('content')
        </div>
        @include('scripts')
    </body>
</html>
