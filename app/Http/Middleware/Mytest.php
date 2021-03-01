<?php

namespace App\Http\Middleware;

use Closure;

class Mytest
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
        // echo 'aaaaa';
        // 中断
        return response(['aaaaa','bbb'],404);

        return $next($request);
    }
}
