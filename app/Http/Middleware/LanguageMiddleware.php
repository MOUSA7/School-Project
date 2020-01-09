<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd(Auth::check());
        //dd(session()->has('user_language'));
        if(session()->has('user_language')){
            App::setlocale(session('user_language'));
        }

        return $next($request);
    }
}
