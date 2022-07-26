<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EnsureIpIsThere
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $acceptedOrigins = [
            'https://next.payav.co',
            'http://127.0.0.1:8000'
        ];

        if (in_array($request->headers->get('origin'), $acceptedOrigins)) {

            return $next($request);
        }

        throw new HttpResponseException(response()->json([
            'status' => false,
            'errors' => "Access Denied",
            'message' => 'You are not permitted to contact this api please contact your technical support',
        ], 400));

    }
}
