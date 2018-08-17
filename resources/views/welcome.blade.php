<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>playlist share</title>
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="/favicon.png">
    </head>
    <body>
        <div id="app"><router-view :route="$route"></router-view></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.4.2/Sortable.min.js"></script>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>