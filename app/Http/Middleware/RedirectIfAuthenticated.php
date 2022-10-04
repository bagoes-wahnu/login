<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }
            // if(Auth::guard($guard)->check()){
            //     if($guard === 'afiliator'){
            //         return redirect()->route('afiliator.dashboard');
            //     }
            // }
            // else
            if(Auth::guard($guard)->check() && Auth::user()-> level == 1){
                return redirect()->route('home1');
            }
            elseif (Auth::guard()->check() && Auth::user()-> level == 2) {
                return redirect()->route('home2');
            }
            elseif(Auth::guard()->check() && Auth::user()-> level == 3){
                return redirect()->route('home3');
            }
            // elseif(Auth::guard()->check() && Auth::user()-> role == 4){
            //     return redirect()->route('teknisi.dashboard');
            // }
            // elseif (Auth::guard()->check() && Auth::user()-> role == 5) {
            //     return redirect()->route('admin2.dashboard');
            // }
        }

        return $next($request);
    }
}
