<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmails = ['agkpup@gmail.com', 'businesswithnitin3@gmail.com'];
        if (!in_array(auth()->user()->email, $allowedEmails)) {
            return redirect('/'); // Redirect to home or another page if not allowed
        }
        return $next($request);
    }
}
