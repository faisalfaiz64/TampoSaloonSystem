<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class checkowner
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
        if (Session::get('user') != 'owner') 
        {
            return redirect('/OwnerLogin');
        }
        return $next($request);
    }
}
