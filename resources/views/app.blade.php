<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Tea&Coffee Grocery</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
     <link href="{{ asset('css/style.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/adding.style.css') }}" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
<example-component></example-component>
</div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
