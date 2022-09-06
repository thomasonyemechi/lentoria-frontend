<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Instructor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $info = session()->get('info') ?? [];
        if ($info['instructor'] == 1) {
            return $next($request);
        } else {
            return redirect('/')->with('error', "Become an instructor to view page");
        }
    }
}