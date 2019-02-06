<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="description" content="{{ __( 'website.meta.description' ) }}" />

  <!-- Social tags -->
  <meta name="og:type" content="website">
  <meta name="og:title" content="Andrea Giuseppe">
  <meta name="og:description" content="{{ __( 'website.meta.description' ) }}">
  <meta name="og:site_name" content="andreagiuseppe.com">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link href="http://andreagiuseppe.com" rel="canonical" />

  <!-- stylesheets -->
  <link rel="stylesheet" href="{{ asset( 'css/theme.css' ) }}" />
  @stack( 'stylesheets' )

  <!-- scripts -->
  @stack( 'scripts' )

  <title>Andrea Giuseppe</title>
 </head>
 <body>
 @yield( 'body' )

 </body>
</html>
