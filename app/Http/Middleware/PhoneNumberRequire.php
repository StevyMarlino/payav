<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PhoneNumberRequire
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        if(is_null(auth()->user()->phone)) {
            return redirect()->route('phone-verify');
        }
        return $next($request);
    }
}
