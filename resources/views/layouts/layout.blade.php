<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- stylesheets -->
  @stack( 'stylesheets' )

  <!-- scripts -->
  @stack( 'scripts' )

  <title></title>
 </head>
 <body>
 @yield( 'body' )

 </body>
</html>
