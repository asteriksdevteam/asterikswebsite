<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        $request->isAdmin = false;
        if (Auth::user() && Auth::user()->IsAdmin == 1) {
            $request->isAdmin = true;
            return $next($request);
        }
        return redirect('/');
    }

}
