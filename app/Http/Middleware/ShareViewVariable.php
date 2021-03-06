<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShareViewVariable
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            view()->share('user', auth()->user());
        }
        return $next($request);
    }
}
