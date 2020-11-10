<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DownForMaintainance
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
        return response()->view('503',[], 500);
        //return $next($request); 
        //it will call next middleware but we put this line in comment because we are developing downfor maintainance middleware
    }
}
