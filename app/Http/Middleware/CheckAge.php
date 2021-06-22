<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckAge
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
        if ($request->birth_year >= 2004) {
            return redirect('admin/home');
        }
        return $next($request);
    }
}
