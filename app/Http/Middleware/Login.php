<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $approve): Response
    {
                $explode = explode('|', $approve);

                foreach ($explode as $key => $value) {
                if ($request->user()->approve == $value) {
                return $next($request);
                }
                }

                return abort(403, 'This Account is Not Approved');
    }
}
