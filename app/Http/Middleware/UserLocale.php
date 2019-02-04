<?php
namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class UserLocale {

 /**
  * Handle an incoming request.
  *
  * @param \Illuminate\Http\Request $request
  * @param \Closure $next
  * @return mixed
  */
 public function handle( $request, Closure $next ) {
  if ( Session::has( 'locale' ) ) {
   $locale = Session::get( 'locale', Config::get( 'app.locale' ) );
   } else {
   $locale = substr( $request->getPreferredLanguage(), 0, 2 );
  }

  App::setLocale( $locale );
  Carbon::setLocale( $locale );

  return $next( $request );
 }
}
