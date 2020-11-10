<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class LoggerMiddleware
{
    public function handle($request, Closure $next)
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
        $uri = $request->route()->uri;
        config('global.logger')->info("route name = $uri action =$action");
        return $next($request);
    }
}
