<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Welcome to Framgia Wifi</title>

        <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

        @yield('head')
    </head>

    <body onload="loadAction();">
        @yield('content')

        @yield('script')
    </body>
</html>
