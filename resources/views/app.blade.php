<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Vuetify</title>

    <!--  Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <app></app>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
