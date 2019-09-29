<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':
            if (Auth::guard($guard)->check()) {
               return redirect()->route('admin.dashboard', app()->getLocale());
            } 
                break;

            case 'owner':
            if (Auth::guard($guard)->check()) {
               return redirect()->route('owner.dashboard', app()->getLocale());
            } 
                break;
            
            default:
            if (Auth::guard($guard)->check()) {
              return redirect()->route('user.home', app()->getLocale());
            }
                break;
        }

        // if (Auth::guard($guard)->check()) {
        //     return redirect(url(app()->getLocale().'/home'));
        // }

        return $next($request);
    }
}
