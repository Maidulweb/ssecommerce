<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/all.css') }}" rel="stylesheet">

    </head>
    <body>

          @include('frontend.partials.header')
          <main role="main">

            @yield('content')
          </main>

          @include('frontend.partials.footer')
        <script src="{{ mix('js/all.js') }}"></script>

    </body>
</html>
