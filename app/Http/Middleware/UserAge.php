<?php

namespace App\Http\Middleware;

use Closure;

class UserAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {
        if ($age <= 200 )
        {
            echo "Less";
        }
        else
        {
            echo "success Age: ".$age;
        }
        
        return $next($request);
    }
}
