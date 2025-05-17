<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedMidddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $has_auth_session = $request->session()->has('user');
    $route_name  = $request->route()->getName();

    if (!$has_auth_session && !($route_name == 'view.register' || $route_name == 'view.login')) {
      return redirect()->route('view.login')->withErrors('Please login to continue.');
    } else if(!$has_auth_session && ($route_name == 'view.register' || $route_name == 'view.login')) {
      return $next($request);
    } else if ($has_auth_session && ($route_name == 'view.register' || $route_name == 'view.login')) {
      return redirect()->route('view.home')->with('success', 'You have been logged in automatically.');
    }

    return $next($request);
  }
}
